function normalizeFacilityLevel(level) {
    return (level || '').trim().toLowerCase();
}

function filterFacilitiesByLevel(facilities, levels) {
    if (!levels.length) return facilities;

    const selected = levels.map(normalizeFacilityLevel);
    return facilities.filter(item => selected.includes(normalizeFacilityLevel(item.facility_level)));
}

function updateFacilityLevelCounts(facilities) {
    document.querySelectorAll('[data-facility-level-count]').forEach(counter => {
        const level = normalizeFacilityLevel(counter.dataset.facilityLevelCount);
        counter.textContent = filterFacilitiesByLevel(facilities, [level]).length;
    });
}
