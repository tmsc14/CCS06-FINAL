// category.js

// Add your custom JavaScript code here
function deleteCategory(categoryId) {
    if (confirm('Are you sure you want to delete this category?')) {
      // Send an AJAX request to delete_category.php to delete the category
      var xhr = new XMLHttpRequest();
      xhr.open('POST', 'delete_category.php', true);
      xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
      xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
          // Refresh the page after successful deletion
          location.reload();
        }
      };
      xhr.send('category_id=' + categoryId);
    }
  }
  