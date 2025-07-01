# === Config ===
$themeName = "neuro-howell"
$srcDir = "src"
$buildDir = "build"
$zipName = "$themeName.zip"
$zipPath = Join-Path $buildDir $zipName

# === Ensure build directory exists ===
if (-Not (Test-Path $buildDir)) {
    New-Item -ItemType Directory -Path $buildDir | Out-Null
}

# === Delete old zip if it exists ===
if (Test-Path $zipPath) {
    Remove-Item $zipPath
}

# === Create the zip ===
Add-Type -AssemblyName 'System.IO.Compression.FileSystem'
[System.IO.Compression.ZipFile]::CreateFromDirectory($srcDir, $zipPath)

Write-Host "✅ Theme built: $zipPath"