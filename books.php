<?php
$pageTitle = "Read the Bible | Stillword";
$currentPage = "books";

$books = [
    "Old Testament" => [
        ["id" => "GEN", "name" => "Genesis", "chapters" => 50],
        ["id" => "EXO", "name" => "Exodus", "chapters" => 40],
        ["id" => "LEV", "name" => "Leviticus", "chapters" => 27],
        ["id" => "NUM", "name" => "Numbers", "chapters" => 36],
        ["id" => "DEU", "name" => "Deuteronomy", "chapters" => 34],
        ["id" => "JOS", "name" => "Joshua", "chapters" => 24],
        ["id" => "JDG", "name" => "Judges", "chapters" => 21],
        ["id" => "RUT", "name" => "Ruth", "chapters" => 4],
        ["id" => "1SA", "name" => "1 Samuel", "chapters" => 31],
        ["id" => "2SA", "name" => "2 Samuel", "chapters" => 24],
        ["id" => "1KI", "name" => "1 Kings", "chapters" => 22],
        ["id" => "2KI", "name" => "2 Kings", "chapters" => 25],
        ["id" => "1CH", "name" => "1 Chronicles", "chapters" => 29],
        ["id" => "2CH", "name" => "2 Chronicles", "chapters" => 36],
        ["id" => "EZR", "name" => "Ezra", "chapters" => 10],
        ["id" => "NEH", "name" => "Nehemiah", "chapters" => 13],
        ["id" => "EST", "name" => "Esther", "chapters" => 10],
        ["id" => "JOB", "name" => "Job", "chapters" => 42],
        ["id" => "PSA", "name" => "Psalms", "chapters" => 150],
        ["id" => "PRO", "name" => "Proverbs", "chapters" => 31],
        ["id" => "ECC", "name" => "Ecclesiastes", "chapters" => 12],
        ["id" => "SNG", "name" => "Song of Solomon", "chapters" => 8],
        ["id" => "ISA", "name" => "Isaiah", "chapters" => 66],
        ["id" => "JER", "name" => "Jeremiah", "chapters" => 52],
        ["id" => "LAM", "name" => "Lamentations", "chapters" => 5],
        ["id" => "EZK", "name" => "Ezekiel", "chapters" => 48],
        ["id" => "DAN", "name" => "Daniel", "chapters" => 12],
        ["id" => "HOS", "name" => "Hosea", "chapters" => 14],
        ["id" => "JOL", "name" => "Joel", "chapters" => 3],
        ["id" => "AMO", "name" => "Amos", "chapters" => 9],
        ["id" => "OBA", "name" => "Obadiah", "chapters" => 1],
        ["id" => "JON", "name" => "Jonah", "chapters" => 4],
        ["id" => "MIC", "name" => "Micah", "chapters" => 7],
        ["id" => "NAM", "name" => "Nahum", "chapters" => 3],
        ["id" => "HAB", "name" => "Habakkuk", "chapters" => 3],
        ["id" => "ZEP", "name" => "Zephaniah", "chapters" => 3],
        ["id" => "HAG", "name" => "Haggai", "chapters" => 2],
        ["id" => "ZEC", "name" => "Zechariah", "chapters" => 14],
        ["id" => "MAL", "name" => "Malachi", "chapters" => 4]
    ],
    "New Testament" => [
        ["id" => "MAT", "name" => "Matthew", "chapters" => 28],
        ["id" => "MRK", "name" => "Mark", "chapters" => 16],
        ["id" => "LUK", "name" => "Luke", "chapters" => 24],
        ["id" => "JHN", "name" => "John", "chapters" => 21],
        ["id" => "ACT", "name" => "Acts", "chapters" => 28],
        ["id" => "ROM", "name" => "Romans", "chapters" => 16],
        ["id" => "1CO", "name" => "1 Corinthians", "chapters" => 16],
        ["id" => "2CO", "name" => "2 Corinthians", "chapters" => 13],
        ["id" => "GAL", "name" => "Galatians", "chapters" => 6],
        ["id" => "EPH", "name" => "Ephesians", "chapters" => 6],
        ["id" => "PHP", "name" => "Philippians", "chapters" => 4],
        ["id" => "COL", "name" => "Colossians", "chapters" => 4],
        ["id" => "1TH", "name" => "1 Thessalonians", "chapters" => 5],
        ["id" => "2TH", "name" => "2 Thessalonians", "chapters" => 3],
        ["id" => "1TI", "name" => "1 Timothy", "chapters" => 6],
        ["id" => "2TI", "name" => "2 Timothy", "chapters" => 4],
        ["id" => "TIT", "name" => "Titus", "chapters" => 3],
        ["id" => "PHM", "name" => "Philemon", "chapters" => 1],
        ["id" => "HEB", "name" => "Hebrews", "chapters" => 13],
        ["id" => "JAS", "name" => "James", "chapters" => 5],
        ["id" => "1PE", "name" => "1 Peter", "chapters" => 5],
        ["id" => "2PE", "name" => "2 Peter", "chapters" => 3],
        ["id" => "1JN", "name" => "1 John", "chapters" => 5],
        ["id" => "2JN", "name" => "2 John", "chapters" => 1],
        ["id" => "3JN", "name" => "3 John", "chapters" => 1],
        ["id" => "JUD", "name" => "Jude", "chapters" => 1],
        ["id" => "REV", "name" => "Revelation", "chapters" => 22]
    ]
];

include "includes/header.php";
?>

<section class="page-intro">
    <p class="eyebrow">YOUR TIME IN THE WORD</p>
    <h1>Read the <em>Bible.</em></h1>
    <p>Find a book, choose a chapter, and take your time.</p>
</section>

<section class="bible-browser">
    <div class="book-search">
        <span aria-hidden="true">⌕</span>
        <input
            type="search"
            id="book-search"
            placeholder="Search for a Bible book..."
            aria-label="Search Bible books"
        >
    </div>

    <div class="testament-tabs" role="group" aria-label="Choose testament">
        <button class="testament-tab active" data-testament="all" type="button">
            All Books
        </button>
        <button class="testament-tab" data-testament="Old Testament" type="button">
            Old Testament
        </button>
        <button class="testament-tab" data-testament="New Testament" type="button">
            New Testament
        </button>
    </div>

    <div id="book-results">
        <?php foreach ($books as $testament => $testamentBooks): ?>
            <section class="testament-section" data-section="<?= htmlspecialchars($testament) ?>">
                <div class="section-heading">
                    <div>
                        <p class="eyebrow">EXPLORE SCRIPTURE</p>
                        <h2><?= htmlspecialchars($testament) ?></h2>
                    </div>
                    <span class="book-count"><?= count($testamentBooks) ?> books</span>
                </div>

                <div class="book-list">
                    <?php foreach ($testamentBooks as $book): ?>
                        <button
                            class="book-item"
                            type="button"
                            data-name="<?= htmlspecialchars(strtolower($book['name'])) ?>"
                            data-testament="<?= htmlspecialchars($testament) ?>"
                            data-book-id="<?= htmlspecialchars($book['id']) ?>"
                            data-chapters="<?= $book['chapters'] ?>"
                            data-book-name="<?= htmlspecialchars($book['name']) ?>"
                        >
                            <span class="book-icon" aria-hidden="true">✧</span>
                            <span class="book-item-name"><?= htmlspecialchars($book['name']) ?></span>
                            <span class="book-item-meta"><?= $book['chapters'] ?> chapters</span>
                            <span class="book-arrow" aria-hidden="true">→</span>
                        </button>
                    <?php endforeach; ?>
                </div>
            </section>
        <?php endforeach; ?>
    </div>

    <p class="empty-books" id="empty-books" hidden>
        No books found. Try another search.
    </p>
</section>

<!-- Chapter selection and reading panel -->
<section class="reader-panel" id="reader-panel" hidden>
    <div class="reader-top">
        <div>
            <p class="eyebrow">TAKE A MOMENT</p>
            <h2 id="reader-title">Genesis 1</h2>
            <p class="reader-subtitle">Read slowly. Reflect freely.</p>
        </div>
        <button class="close-reader" id="close-reader" type="button" aria-label="Close reader">
            ×
        </button>
    </div>

    
<div class="chapter-picker">
    <label for="chapter-select">Choose chapter</label>
    <select id="chapter-select"></select>

    <label for="reader-translation">Bible translation</label>
    <select id="reader-translation">
        <optgroup label="English">
            <option value="kjv">King James Version (KJV)</option>
            <option value="web">World English Bible (WEB)</option>
            <option value="asv">American Standard Version (ASV)</option>
        </optgroup>
    </select>

    <button class="primary-button" id="load-chapter" type="button">
        Read chapter
    </button>
</div>


    <p class="reader-status" id="reader-status" aria-live="polite">
        Choose a chapter to begin reading.
    </p>

    <div class="verse-list" id="verse-list"></div>

    <div class="chapter-navigation">
        <button class="secondary-button" id="previous-chapter" type="button">
            ← Previous
        </button>
        <span id="chapter-position"></span>
        <button class="secondary-button" id="next-chapter" type="button">
            Next →
        </button>
    </div>
</section>

<?php include "includes/footer.php"; ?>
