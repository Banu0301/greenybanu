[build]
  publish = "public" # Replace with your actual build directory
  command = "npm run build" # Adjust according to your build process


[[redirects]]
  from = "/*"
  to = "/index.php"
  status = 200
