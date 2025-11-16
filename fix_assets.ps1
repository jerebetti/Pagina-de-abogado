#!/usr/bin/env pwsh

$files = @(
    "c:\Users\Jere\Pagina_gabi\resources\views\index.blade.php",
    "c:\Users\Jere\Pagina_gabi\resources\views\blog.blade.php",
    "c:\Users\Jere\Pagina_gabi\resources\views\single.blade.php",
    "c:\Users\Jere\Pagina_gabi\resources\views\contact.blade.php"
)

foreach ($file in $files) {
    Write-Host "Procesando: $file"
    $content = Get-Content $file -Raw
    
    # Convertir rutas de imágenes
    $content = $content -replace 'src="images/', 'src="{{ asset(''24-news/images/'
    $content = $content -replace '(src="{{ asset\(''24-news/images/[^"]+)\.jpg"', '$1.jpg'') }}"'
    $content = $content -replace '(src="{{ asset\(''24-news/images/[^"]+)\.png"', '$1.png'') }}"'
    
    # Convertir href de imágenes/static
    $content = $content -replace 'href="images/', 'href="{{ asset(''24-news/images/'
    $content = $content -replace '(href="{{ asset\(''24-news/images/[^"]+)\.jpg"', '$1.jpg'') }}"'
    $content = $content -replace '(href="{{ asset\(''24-news/images/[^"]+)\.png"', '$1.png'') }}"'
    
    # Convertir enlaces HTML a rutas nombradas
    $content = $content -replace 'href="index\.html"', 'href="{{ route(''home'') }}"'
    $content = $content -replace 'href="blog\.html"', 'href="{{ route(''blog'') }}"'
    $content = $content -replace 'href="single\.html"', 'href="{{ route(''single'') }}"'
    $content = $content -replace 'href="Contact_us\.html"', 'href="{{ route(''contact'') }}"'
    
    Set-Content $file $content -Encoding UTF8
    Write-Host "[OK] $file actualizado"
}

Write-Host "Completado!"
