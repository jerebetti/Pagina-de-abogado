$files = @('blog', 'single', 'Contact_us')

foreach ($file in $files) {
    $htmlPath = "public\24-news\$file.html"
    $html = Get-Content $htmlPath -Raw
    
    # Reemplazos
    $html = $html.Replace('src="css/', 'src="{{ asset("' + "'" + '24-news/css/')
    $html = $html.Replace('src="js/', 'src="{{ asset("' + "'" + '24-news/js/')
    $html = $html.Replace('src="images/', 'src="{{ asset("' + "'" + '24-news/images/')
    $html = $html.Replace('href="css/', 'href="{{ asset("' + "'" + '24-news/css/')
    $html = $html.Replace('.css"', '.css"' + "'" + ') }}')
    $html = $html.Replace('.js"', '.js"' + "'" + ') }}')
    $html = $html.Replace('.jpg"', '.jpg"' + "'" + ') }}')
    $html = $html.Replace('.png"', '.png"' + "'" + ') }}')
    $html = $html.Replace('.gif"', '.gif"' + "'" + ') }}')
    
    $bladeName = if ($file -eq 'Contact_us') { 'contact' } else { $file }
    $bladePath = "resources\views\$bladeName.blade.php"
    
    Set-Content -Path $bladePath -Value $html
    Write-Host "Creado: $bladePath"
}

Write-Host "Conversión completada"
