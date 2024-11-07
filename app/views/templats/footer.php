<script src="https://unpkg.com/taos@1.0.5/dist/taos.js">
  
</script>
<script>


  // Mengambil semua tautan di navbar
  const links = document.querySelectorAll('#navbarToggler');

  // Menambahkan event listener pada setiap tautan
  links.forEach(link => {
    link.addEventListener('click', function() {
      // Menghapus kelas 'text-yellow-500' dari semua tautan
      links.forEach(link => link.classList.remove('text-purple-500'));
      console.log(this)

      this.classList.remove('text-slate-700');
      // Menambahkan kelas 'text-yellow-500' pada tautan yang diklik
      this.classList.add('text-purple-500'); // Warna aktif
    });
  });
  
</script>
</body>

</html>