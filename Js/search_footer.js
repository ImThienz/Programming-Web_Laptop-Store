                                    /* Lướt lên phần tìm kiếm trong footer*/

// Lấy tất cả các liên kết "Nội dung" trong phần footer
var contentLinks = document.querySelectorAll('ul li a[href="#search-section"]');

// Đặt sự kiện click cho từng liên kết
contentLinks.forEach(function(link) {
    link.addEventListener('click', function(event) {
        event.preventDefault(); // Ngăn chuyển hướng mặc định
        var targetSection = document.querySelector(link.getAttribute('href'));
        if (targetSection) {
            // Thực hiện cuộc lướt trang đến phần tìm kiếm
            targetSection.scrollIntoView({ behavior: 'smooth' });
        }
    });
});
