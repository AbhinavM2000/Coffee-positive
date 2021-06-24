<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=0.75">
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<script>
Swal.fire({
  icon: 'error',
  title: 'Oopsie doopsie...',
  text: 'Invalid credentials, Try again.',
}).then((result) => {
  window.location.href = "index.html"
})
</script>
</body>
</html>
