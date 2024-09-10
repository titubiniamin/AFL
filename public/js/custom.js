jQuery(function () {
    $('.delete-item').submit(function (e) {
        if (!confirm('Are you sure to delete this item?')) {
            e.preventDefault();
            return false;
        }
    });
})

// jQuery click event to toggle the search input visibility
$('#search-icon').on('click', function () {
    $('.search-container').toggleClass('active');
});
