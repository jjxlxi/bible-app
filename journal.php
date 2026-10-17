<?php
// Identify the current page for the shared navigation.
$currentPage = basename($_SERVER['PHP_SELF']);

include 'includes/header.php';
?>

<main class="reflect-page">
    <section class="reflect-hero">
        <p class="reflect-eyebrow">STILLWORD · PERSONAL REFLECTION</p>
        <h1>A moment to reflect.</h1>
        <p>
            Take a quiet moment to think about what you've read,
            what it means to you, and how you can apply it.
        </p>
    </section>

    <section class="reflect-editor">
        <div class="reflect-section-heading">
            <div>
                <p class="reflect-eyebrow">YOUR QUIET SPACE</p>
                <h2 id="reflect-form-title">A new reflection</h2>
            </div>
            <span class="reflect-leaf" aria-hidden="true">✿</span>
        </div>

        <form id="reflect-form">
            <label for="reflect-title">Reflection title</label>
            <input
                type="text"
                id="reflect-title"
                placeholder="e.g., Learning to trust"
                maxlength="100"
            >

            <label for="reflect-reference">Bible reference</label>
            <input
                type="text"
                id="reflect-reference"
                placeholder="e.g., Psalm 23:1"
                maxlength="100"
            >

            <div class="reflect-prompt">
                <label for="reflect-learned">1. What stood out to you?</label>
                <p>Which verse, message, or idea caught your attention?</p>
                <textarea
                    id="reflect-learned"
                    rows="4"
                    placeholder="Write your thoughts here..."
                    required
                ></textarea>
            </div>

            <div class="reflect-prompt">
                <label for="reflect-meaning">2. What did you learn?</label>
                <p>What did this passage help you understand?</p>
                <textarea
                    id="reflect-meaning"
                    rows="4"
                    placeholder="What meaning did you find?"
                ></textarea>
            </div>

            <div class="reflect-prompt">
                <label for="reflect-application">3. How can you apply it?</label>
                <p>Is there something you want to remember or practice?</p>
                <textarea
                    id="reflect-application"
                    rows="4"
                    placeholder="Write your personal application..."
                ></textarea>
            </div>

            <p id="reflect-message" class="reflect-message"
               role="status" aria-live="polite"></p>

            <div class="reflect-actions">
                <button type="submit" class="reflect-primary-btn"
                        id="reflect-save-btn">
                    Save reflection
                </button>
                <button type="button" class="reflect-secondary-btn"
                        id="reflect-clear-btn">
                    Clear form
                </button>
                <button type="button" class="reflect-secondary-btn"
                        id="reflect-cancel-btn" hidden>
                    Cancel editing
                </button>
            </div>
        </form>

        <p class="reflect-privacy-note">
            Your reflections are saved locally in this browser.
            They are not uploaded to a server.
        </p>
    </section>

    <section class="reflect-entries">
       
<section class="reflect-entries">
    <div class="reflect-section-heading">
        <div>
            <p class="reflect-eyebrow">YOUR WRITING</p>
            <h2>Past reflections</h2>
        </div>

        <div class="reflect-heading-actions">
            <span id="reflect-count" class="reflect-count">0 entries</span>
            <button
                type="button"
                id="reflect-download-btn"
                class="reflect-secondary-btn"
            >
                Download reflections
            </button>
        </div>
    </div>


        <div id="reflect-entries-list"></div>

        <div id="reflect-empty" class="reflect-empty">
            <span aria-hidden="true">❀</span>
            <h3>Your space is waiting.</h3>
            <p>Your saved reflections will appear here when you write one.</p>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>
