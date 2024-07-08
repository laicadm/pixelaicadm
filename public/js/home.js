document.addEventListener('DOMContentLoaded', function() {
    function fetchTime() {
        fetch('/time', {
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        })
        .then(response => response.json())
        .then(data => {
            let timeString = new Date(data.time).toLocaleTimeString('en-US', {
                timeZone: 'Asia/Manila',
                hour: '2-digit',
                minute: '2-digit',
                hour12: true
            });
            document.getElementById('clock').innerText = timeString;
        });
    }

    // Update the time every minute
    setInterval(fetchTime, 60000);

    // Initial call to display time immediately
    fetchTime();
});