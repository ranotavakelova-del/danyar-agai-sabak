        <span class="badge badge-accent" style="margin-bottom: 12px;">${item.tag}</span>
        <div style="font-size: 13px; color: var(--text-muted); margin-bottom: 8px;">${item.date}</div>
        <h3 style="font-size: 22px; margin-bottom: 18px; line-height: 1.35;">${item.title}</h3>
        <div style="font-size: 15px; color: var(--text); line-height: 1.65;">${item.content}</div>
        <button class="btn btn-primary" style="margin-top: 24px; width: 100%;" onclick="closeModal('newsModal')">Закрыть новость</button>
      `;
      document.getElementById('newsModalContent').innerHTML = html;
      document.getElementById('newsModal').classList.add('active');
    }
    // Lightbox просмотр картинок
    function openLightbox(url, caption) {
      document.getElementById('lightboxImg').src = url;
      document.getElementById('lightboxCaption').textContent = caption;
      document.getElementById('lightboxModal').classList.add('active');
    }
    // Закрытие модалок
    function closeModal(id) {
      document.getElementById(id).classList.remove('active');
    }
    function closeModalOnBackdrop(event, id) {
      if (event.target === document.getElementById(id)) {
        closeModal(id);
      }
    }
    document.addEventListener('keydown', e => {
      if (e.key === 'Escape') {
        document.querySelectorAll('.modal-backdrop').forEach(m => m.classList.remove('active'));
      }
    });
    // Автоскрытие flash-уведомления через 7 секунд
    const flashAlert = document.getElementById('flashAlert');
    if (flashAlert) {
      setTimeout(() => {
        flashAlert.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
        flashAlert.style.opacity = '0';
        flashAlert.style.transform = 'translateX(100%)';
        setTimeout(() => flashAlert.remove(), 500);
      }, 7000);
    }
  </script>
</body>
</html>
</html>