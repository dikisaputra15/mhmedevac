function filterPoliceByCategory(polices, categories) {
    if (!categories.length) return polices;

    const selected = categories.map(category => category.trim().toLowerCase());
    return polices.filter(item => (item.category || '').split(',').some(category =>
        selected.includes(category.trim().toLowerCase())
    ));
}

function updatePoliceCategoryCounts(polices) {
    document.querySelectorAll('[data-police-category-count]').forEach(counter => {
        counter.textContent = filterPoliceByCategory(polices, [counter.dataset.policeCategoryCount]).length;
    });
}
