<?php
$currentPage = basename($_SERVER['PHP_SELF']);
include __DIR__ . '/includes/header.php';
?>

<main class="saved-page">

    <!-- Page introduction -->
    <section class="saved-hero">
        <p class="eyebrow">YOUR PERSONAL COLLECTION</p>
        <h1>Words worth keeping.</h1>
        <p>
            Keep the verses that comfort you, inspire you,
            or remind you of what matters.
        </p>
    </section>

    <!-- Saved verse collection -->
    <section class="saved-section">
        <div class="saved-heading">
            <div>
                <p class="eyebrow">BOOKMARKED SCRIPTURE</p>
                <h2>Your saved verses</h2>
            </div>

            <span id="saved-count" class="saved-count">0 verses</span>
        </div>

        <div id="saved-verses-list" class="saved-verses-list">
            <!-- Saved verses are rendered by JavaScript. -->
        </div>

        <div id="saved-empty" class="saved-empty">
            <span class="saved-empty-icon" aria-hidden="true">♡</span>
            <h3>A little space for your favorites.</h3>
            <p>
                When a verse speaks to you, bookmark it while reading.
                It will be kept here for you to revisit.
            </p>
            <a class="saved-browse-button" href="books.php">
                Explore Scripture
            </a>
        </div>

        <p id="saved-message" class="saved-message" role="status" hidden></p>
    </section>

</main>

<?php include __DIR__ . '/includes/footer.php'; ?>
