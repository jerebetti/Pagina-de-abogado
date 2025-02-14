<?php

namespace App\Services;

use Google\Cloud\RecaptchaEnterprise\V1\RecaptchaEnterpriseServiceClient;
use Google\Cloud\RecaptchaEnterprise\V1\Event;
use Google\Cloud\RecaptchaEnterprise\V1\Assessment;
use Google\Cloud\RecaptchaEnterprise\V1\TokenProperties\InvalidReason;

class RecaptchaService
{
    public function validateToken(string $token, string $action): bool
    {
        $client = new RecaptchaEnterpriseServiceClient();
        $project = env('RECAPTCHA_PROJECT_ID');
        $siteKey = env('RECAPTCHA_SITE_KEY');
        $minScore = env('RECAPTCHA_MIN_SCORE', 0.5);
        $projectName = $client->projectName($project);

        $event = (new Event())
            ->setSiteKey($siteKey)
            ->setToken($token);

        $assessment = (new Assessment())
            ->setEvent($event);

        try {
            $response = $client->createAssessment($projectName, $assessment);

            if (!$response->getTokenProperties()->getValid()) {
                \Log::error('reCAPTCHA inválido: ' . InvalidReason::name($response->getTokenProperties()->getInvalidReason()));
                return false;
            }

            if ($response->getTokenProperties()->getAction() !== $action) {
                \Log::error('La acción en el token de reCAPTCHA no coincide.');
                return false;
            }

            $score = $response->getRiskAnalysis()->getScore();
            \Log::info("reCAPTCHA Score: $score");

            return $score >= $minScore;
        } catch (\Exception $e) {
            \Log::error('Error al validar reCAPTCHA: ' . $e->getMessage());
            return false;
        }
    }
}
