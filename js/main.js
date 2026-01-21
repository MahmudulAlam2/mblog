document.addEventListener('DOMContentLoaded', () => {
  // ===== MENU TOGGLE =====
  function toggleMenu() {
    const menu = document.querySelector('.menu__container');
    const toggle = document.querySelector('.menu-toggle');
    const isExpanded = menu.classList.toggle('active');
    toggle.textContent = isExpanded ? '✕' : '☰';
    toggle.setAttribute('aria-expanded', isExpanded);
  }

  const menuToggle = document.querySelector('.menu-toggle');
  if (menuToggle) menuToggle.addEventListener('click', toggleMenu);

  // AUTO-CLOSE ON ANYWHERE CLICK
  document.addEventListener('click', function (event) {
    const menu = document.querySelector('.menu__container');
    const toggle = document.querySelector('.menu-toggle');

    if (
      menu &&
      menu.classList.contains('active') &&
      !menu.contains(event.target) &&
      !toggle.contains(event.target)
    ) {
      menu.classList.remove('active');
      toggle.textContent = '☰';
      toggle.setAttribute('aria-expanded', 'false');
    }
  });

  // Close on link click
  document.querySelectorAll('.menulink a').forEach(link => {
    link.addEventListener('click', () => {
      const menu = document.querySelector('.menu__container');
      const toggle = document.querySelector('.menu-toggle');
      menu.classList.remove('active');
      toggle.textContent = '☰';
      toggle.setAttribute('aria-expanded', 'false');
    });
  });

  // Toggle account menu
  const accountButton = document.querySelector('.account__button');
  if (accountButton) {
    accountButton.addEventListener('click', function () {
      const menu = document.querySelector('.account__menu');
      const isExpanded = menu.classList.toggle('active');
      this.setAttribute('aria-expanded', isExpanded);
    });
  }

  // ===== TRUNCATE POST TEXT =====
  const descriptions = document.querySelectorAll('.post__body');
  descriptions.forEach(desc => {
    const fullText = desc.textContent.trim();
    const words = fullText.split(/\s+/);

    if (words.length > 20) {
      const shortText = words.slice(0, 20).join(' ');
      desc.innerHTML =
        shortText + ' <a href="post.html" class="read-more">Read More...</a>';
    }
  });

  // ===== SIDEBAR WITH OVERLAY =====
  const sidebar = document.querySelector('aside');
  const showSidebarButton = document.getElementById('show__sidebar-btn');
  const hideSidebarButton = document.getElementById('hide__sidebar-btn');

  // Create overlay element
  const overlay = document.createElement('div');
  overlay.classList.add('sidebar-overlay');
  document.body.appendChild(overlay);

  const showSidebar = () => {
    sidebar.style.left = '0';
    showSidebarButton.style.display = 'none';
    hideSidebarButton.style.display = 'inline-block';
    overlay.classList.add('active');
    document.body.classList.add('sidebar-open');
  };

  const hideSidebar = () => {
    sidebar.style.left = '-100%';
    showSidebarButton.style.display = 'inline-block';
    hideSidebarButton.style.display = 'none';
    overlay.classList.remove('active');
    document.body.classList.remove('sidebar-open');
  };

  if (showSidebarButton) showSidebarButton.addEventListener('click', showSidebar);
  if (hideSidebarButton) hideSidebarButton.addEventListener('click', hideSidebar);

  // Click outside to close
  overlay.addEventListener('click', hideSidebar);

  document.addEventListener('click', e => {
    const clickedInsideSidebar = sidebar.contains(e.target);
    const clickedButton =
      showSidebarButton.contains(e.target) || hideSidebarButton.contains(e.target);

    if (
      !clickedInsideSidebar &&
      !clickedButton &&
      document.body.classList.contains('sidebar-open')
    ) {
      hideSidebar();
    }
  });

  // Optional: close sidebar on ESC key
  document.addEventListener('keydown', e => {
    if (e.key === 'Escape' && document.body.classList.contains('sidebar-open')) {
      hideSidebar();
    }
  });
});


document.querySelectorAll('tbody td:first-child').forEach(td => {
  const fullText = td.textContent.trim();
  const words = fullText.split(/\s+/);
  if (words.length > 6) {
    const shortText = words.slice(0, 6).join(' ');
    td.textContent = shortText + '...';
  }
});