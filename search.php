<?php
// Load Stillword's shared navigation.
include "includes/header.php";
?>

<main class="search-page">

    <!-- Page introduction -->
    <section class="search-hero">
        <p class="eyebrow">A QUIET PLACE TO DISCOVER</p>
        <h1>Find words that <span>speak to you.</span></h1>
        <p>
            Search for a Bible passage or find Scripture
            that contains a word close to your heart.
        </p>
    </section>

    <!-- Search panel -->
    <section class="scripture-search-section">

        <div class="search-panel">

            <div class="search-tabs" role="group" aria-label="Search type">
                <button
                    type="button"
                    class="search-tab active"
                    data-mode="keyword"
                    aria-pressed="true">
                    Keyword search
                </button>

                <button
                    type="button"
                    class="search-tab"
                    data-mode="reference"
                    aria-pressed="false">
                    Bible reference
                </button>
            </div>

            <form id="scripture-search-form">

                <label for="scripture-query" id="search-label">
                    What word would you like to find?
                </label>

                <div class="search-input-row">
                    <input
                        type="search"
                        id="scripture-query"
                        name="query"
                        placeholder="Try: love, hope, peace..."
                        required
                        autocomplete="off">

                    <button type="submit" class="button button-primary">
                        Search <span aria-hidden="true">&rarr;</span>
                    </button>
                </div>

                <p class="search-hint" id="search-hint">
                    Find verses containing your chosen word.
                </p>

                <div class="translation-row">
                    <label for="translation-select">Bible translation</label>

                    <select id="translation-select">
                        <option value="kjv">King James Version (KJV)</option>
                        <option value="web">World English Bible (WEB)</option>
                    </select>
                </div>

            </form>
        </div>

        <!-- Example searches -->
        <div class="suggested-searches">
            <p>Need a place to start?</p>

            <div class="suggestion-list">
                <button type="button" class="suggestion-chip" data-query="hope">
                    Hope
                </button>

                <button type="button" class="suggestion-chip" data-query="peace">
                    Peace
                </button>

                <button type="button" class="suggestion-chip" data-query="love">
                    Love
                </button>

                <button type="button" class="suggestion-chip" data-query="John 3:16">
                    John 3:16
                </button>
            </div>
        </div>

    </section>

    <!-- Search results appear here -->
    <section class="search-results-section" aria-live="polite">

        <div class="results-heading">
            <div>
                <p class="eyebrow">YOUR DISCOVERY</p>
                <h2 id="results-title">Scripture for your moment</h2>
            </div>

            <p id="results-count" class="results-count"></p>
        </div>

        <p id="search-status" class="search-status">
            Enter a keyword or Bible reference to begin.
        </p>

        <div id="search-results" class="search-results"></div>

    </section>

</main>

<?php
// Load the shared footer and JavaScript.
include "includes/footer.php";
?>
