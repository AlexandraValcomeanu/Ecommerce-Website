document.addEventListener("DOMContentLoaded", function () {
    
    const searchBar = document.getElementById('form-control'); 
    const products = document.querySelectorAll('.product'); 

    searchBar.addEventListener('input', function () {
        const searchText = searchBar.value.toLowerCase(); // Textul introdus în search bar
        filterProducts(searchText);
    });

    const categoryFilters = document.querySelectorAll(".category-filter");
    const brandFilters = document.querySelectorAll(".brand-filter");

    // Funcția de filtrare
    function filterProducts(searchText = "") {
        const selectedCategories = Array.from(categoryFilters)
            .filter(input => input.checked)
            .map(input => input.value);

        const selectedBrands = Array.from(brandFilters)
            .filter(input => input.checked)
            .map(input => input.value);

        products.forEach(product => {
            
            const productCategory = product.getAttribute('data-category');
            const productBrand = product.getAttribute('data-brand').toLowerCase();

            // Verifică atât căutarea cât și filtrarea
            const searchMatch = productBrand.includes(searchText); 
            const categoryMatch = selectedCategories.length === 0 || selectedCategories.includes(productCategory);
            const brandMatch = selectedBrands.length === 0 || selectedBrands.includes(productBrand);

            if (searchMatch && categoryMatch && brandMatch) {
                product.style.display = 'block'; // Arată produsul
            } else {
                product.style.display = 'none'; // Ascunde produsul
            }
        });
    }

    categoryFilters.forEach(filter => filter.addEventListener("change", function () {
        const searchText = searchBar.value.toLowerCase();
        filterProducts(searchText);
    }));

    brandFilters.forEach(filter => filter.addEventListener("change", function () {
        const searchText = searchBar.value.toLowerCase();
        filterProducts(searchText);
    }));
});
