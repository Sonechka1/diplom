document.querySelectorAll('.status-checkbox').forEach(checkbox => {
    checkbox.addEventListener('change', function() {
      let requestId = this.dataset.requestId;
      let status = 'completed';
      
      fetch('/change-request-status', {
        method: 'POST',
        body: JSON.stringify({ requestId: requestId, status: status }),
        headers: {
          'Content-Type': 'application/json',
          'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        }
      })
      .then(response => {
        if (response.ok) {
          this.parentElement.classList.add('completed');
        }
      })
      .catch(error => {
        console.error('Ошибка:', error);
      });
    });
  });