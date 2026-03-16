    const categoryFilters = document.querySelectorAll(".category-filter");
    const brandFilters = document.querySelectorAll(".brand-filter");
    const products = document.querySelectorAll(".product");

    function filterProducts() {
        
        const selectedCategories = Array.from(categoryFilters)
            .filter(input => input.checked)
            .map(input => input.value);

        const selectedBrands = Array.from(brandFilters)
            .filter(input => input.checked)
            .map(input => input.value);

        products.forEach(product => {
            const productCategory = product.getAttribute("data-category");
            const productBrand = product.getAttribute("data-brand");

            // Verifică dacă produsul aparține categoriilor/brandurilor selectate
            const categoryMatch = selectedCategories.length === 0 || selectedCategories.includes(productCategory);
            const brandMatch = selectedBrands.length === 0 || selectedBrands.includes(productBrand);

            if (categoryMatch && brandMatch) {
                product.style.display = "block";
            } else {
                product.style.display = "none";
            }
        });
    }

    categoryFilters.forEach(filter => filter.addEventListener("change", filterProducts));
    brandFilters.forEach(filter => filter.addEventListener("change", filterProducts));




