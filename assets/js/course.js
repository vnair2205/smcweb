document.addEventListener('DOMContentLoaded', function() {
    // --- ELEMENTS ---
    const searchInput = document.getElementById('course-search-input');
    const searchBtn = document.getElementById('search-btn');
    const suggestionsContainer = document.getElementById('search-suggestions');
    const categoryFilters = document.querySelectorAll('input[name="categoryFilter"]');
    const allCourseCards = Array.from(document.querySelectorAll('.course-card-wrapper'));
    const noResultsMessage = document.getElementById('no-results-message');
    const loadMoreBtn = document.getElementById('load-more-btn');

    // --- STATE MANAGEMENT ---
    const courseTitles = allCourseCards.map(card => card.getAttribute('data-title'));
    const ITEMS_PER_PAGE = 10;
    let currentlyVisibleCount = 0;
    let currentFilteredCards = [];

    // --- CORE FUNCTIONS ---

    /**
     * This is the main function that handles filtering and displaying courses.
     * It's called whenever a filter or search is changed.
     */
    function updateCourseDisplay() {
        const searchTerm = searchInput.value.toLowerCase();
        const selectedCategory = document.querySelector('input[name="categoryFilter"]:checked').value;

        // 1. Determine which cards match the current filters
        currentFilteredCards = allCourseCards.filter(card => {
            const title = card.getAttribute('data-title').toLowerCase();
            const category = card.getAttribute('data-category').toLowerCase();
            const searchMatch = title.includes(searchTerm) || category.includes(searchTerm);
            const categoryMatch = (selectedCategory === 'all' || selectedCategory.toLowerCase() === category);
            return searchMatch && categoryMatch;
        });

        // 2. Hide all cards to reset the view
        allCourseCards.forEach(card => card.style.display = 'none');
        
        // 3. Show the first page of results
        const cardsToShow = currentFilteredCards.slice(0, ITEMS_PER_PAGE);
        cardsToShow.forEach(card => card.style.display = 'block');
        currentlyVisibleCount = cardsToShow.length;

        // 4. Update UI (no results message, load more button)
        updateUI();
    }

    /**
     * Handles loading the next page of courses from the already filtered list.
     */
    function loadMoreItems() {
        const nextItemsToShow = currentFilteredCards.slice(
            currentlyVisibleCount,
            currentlyVisibleCount + ITEMS_PER_PAGE
        );

        nextItemsToShow.forEach(card => card.style.display = 'block');
        currentlyVisibleCount += nextItemsToShow.length;

        updateUI();
    }

    /**
     * Updates the visibility of the "Load More" button and "No Results" message.
     */
    function updateUI() {
        noResultsMessage.style.display = currentFilteredCards.length === 0 ? 'block' : 'none';
        loadMoreBtn.style.display = currentlyVisibleCount < currentFilteredCards.length ? 'block' : 'none';
    }

    /**
     * Shows search suggestions as the user types.
     */
    function showSuggestions() {
        const inputText = searchInput.value.toLowerCase();
        suggestionsContainer.innerHTML = '';
        if (inputText.length === 0) {
            suggestionsContainer.style.display = 'none';
            return;
        }
        const filteredTitles = courseTitles.filter(title => title.toLowerCase().startsWith(inputText));
        if (filteredTitles.length > 0) {
            filteredTitles.forEach(title => {
                const item = document.createElement('div');
                item.classList.add('suggestion-item');
                item.textContent = title;
                item.addEventListener('click', () => {
                    searchInput.value = title;
                    suggestionsContainer.style.display = 'none';
                    updateCourseDisplay();
                });
                suggestionsContainer.appendChild(item);
            });
            suggestionsContainer.style.display = 'block';
        } else {
            suggestionsContainer.style.display = 'none';
        }
    }

    // --- EVENT LISTENERS ---
    searchBtn.addEventListener('click', () => {
        suggestionsContainer.style.display = 'none';
        updateCourseDisplay();
    });
    searchInput.addEventListener('keyup', event => {
        if (event.key === 'Enter') {
            suggestionsContainer.style.display = 'none';
            updateCourseDisplay();
        } else {
            showSuggestions();
        }
    });
    categoryFilters.forEach(radio => {
        radio.addEventListener('change', updateCourseDisplay);
    });
    loadMoreBtn.addEventListener('click', loadMoreItems);
    document.addEventListener('click', event => {
        if (!event.target.closest('.search-wrapper')) {
            suggestionsContainer.style.display = 'none';
        }
    });

    // --- INITIAL PAGE LOAD ---
    updateCourseDisplay();
});
