document.addEventListener("DOMContentLoaded", function () {
    const loginButton = document.getElementById("loginButton");

    loginButton.addEventListener("click", function () {
        // ทำการล็อกอิน
        // เมื่อล็อกอินสำเร็จ ให้เปลี่ยนเส้นทางไปยังหน้า "Manage"
        window.location.href = "{{ route('Manage') }}";
    });
});