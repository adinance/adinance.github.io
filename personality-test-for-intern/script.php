    <script>
        // เพิ่มสถานะใหม่ใน history
        history.pushState(null, '', location.href);
        // ดักจับเมื่อผู้ใช้พยายามกด back
        window.onpopstate = function() {
            history.pushState(null, '', location.href);
        };
    </script>

    <script>
        // ป้องกันการคลิกขวา
        document.addEventListener('contextmenu', function(e) {
            e.preventDefault();
        });
        // ป้องกันการเลือกข้อความ
        document.addEventListener('selectstart', function(e) {
            e.preventDefault();
        });
    </script>