document.addEventListener("DOMContentLoaded", function() {
  const hamBurger = document.querySelector(".toggle-btn");
  const sidebar = document.getElementById("sidebar");
  const mainContent = document.querySelector(".main");

  hamBurger.addEventListener("click", function() {
    toggleSidebar();
  });

  // Function to toggle sidebar and main content
  function toggleSidebar() {
    sidebar.classList.toggle("expand");
    mainContent.classList.toggle("move-right");
  }
});
