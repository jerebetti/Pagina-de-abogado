#!/usr/bin/env pwsh

# Script to convert index.html, blog.html, single.html, contact.html to use app24 layout
# Preserves all content and converts image/CSS/JS paths to use asset()

$viewsPath = "c:\Users\Jere\Pagina_gabi\resources\views"

# Function to convert paths in content
function Convert-Paths {
    param([string]$content)
    
    # Convert relative image paths to asset()
    $content = $content -replace 'src="images/', 'src="{{ asset(''24-news/images/'
    $content = $content -replace '\.jpg"', '.jpg'') }}"'
    $content = $content -replace '\.png"', '.png'') }}"'
    
    # Convert relative CSS/JS paths to asset()
    $content = $content -replace 'href="css/', 'href="{{ asset(''24-news/css/'
    $content = $content -replace '\.css"', '.css'') }}"'
    
    $content = $content -replace 'src="js/', 'src="{{ asset(''24-news/js/'
    $content = $content -replace '\.js"', '.js'') }}"'
    
    return $content
}

# Process index.blade.php
Write-Host "Processing index.blade.php..."
$indexContent = Get-Content "$viewsPath\index.blade.php" -Raw
# Find the navigation section start
$navStart = $indexContent.IndexOf('<div class="container-fluid bg-faded fh5co_padd_mediya padding_786">')
# Find the footer start
$footerStart = $indexContent.IndexOf('<div class="container-fluid fh5co_footer_bg pb-3">')
# Extract content between nav and footer
$contentBody = $indexContent.Substring($navStart, $footerStart - $navStart)
# Convert paths
$contentBody = Convert-Paths $contentBody

$indexBlade = "@extends('app24')`n`n@section('content')`n" + $contentBody + "`n@endsection"
Set-Content "$viewsPath\index.blade.php" $indexBlade -Encoding UTF8
Write-Host "[OK] index.blade.php updated"

# Process blog.blade.php
Write-Host "Processing blog.blade.php..."
$blogContent = Get-Content "$viewsPath\blog.blade.php" -Raw
$navStart = $blogContent.IndexOf('<div class="container-fluid bg-faded fh5co_padd_mediya padding_786">')
$footerStart = $blogContent.IndexOf('<div class="container-fluid fh5co_footer_bg pb-3">')
$contentBody = $blogContent.Substring($navStart, $footerStart - $navStart)
$contentBody = Convert-Paths $contentBody

$blogBlade = "@extends('app24')`n`n@section('content')`n" + $contentBody + "`n@endsection"
Set-Content "$viewsPath\blog.blade.php" $blogBlade -Encoding UTF8
Write-Host "[OK] blog.blade.php updated"

# Process single.blade.php
Write-Host "Processing single.blade.php..."
$singleContent = Get-Content "$viewsPath\single.blade.php" -Raw
$navStart = $singleContent.IndexOf('<div class="container-fluid bg-faded fh5co_padd_mediya padding_786">')
$footerStart = $singleContent.IndexOf('<div class="container-fluid fh5co_footer_bg pb-3">')
$contentBody = $singleContent.Substring($navStart, $footerStart - $navStart)
$contentBody = Convert-Paths $contentBody

$singleBlade = "@extends('app24')`n`n@section('content')`n" + $contentBody + "`n@endsection"
Set-Content "$viewsPath\single.blade.php" $singleBlade -Encoding UTF8
Write-Host "[OK] single.blade.php updated"

# Process contact.blade.php
Write-Host "Processing contact.blade.php..."
$contactContent = Get-Content "$viewsPath\contact.blade.php" -Raw
$navStart = $contactContent.IndexOf('<div class="container-fluid bg-faded fh5co_padd_mediya padding_786">')
$footerStart = $contactContent.IndexOf('<div class="container-fluid fh5co_footer_bg pb-3">')
$contentBody = $contactContent.Substring($navStart, $footerStart - $navStart)
$contentBody = Convert-Paths $contentBody

$contactBlade = "@extends('app24')`n`n@section('content')`n" + $contentBody + "`n@endsection"
Set-Content "$viewsPath\contact.blade.php" $contactBlade -Encoding UTF8
Write-Host "[OK] contact.blade.php updated"

Write-Host "[OK] All views converted successfully!"
