<!DOCTYPE html>
<html lang="en">
@include('common.head')
<body class="home">
<header class="header">
    <h1 class="header-title">ListPal</h1>
</header>
<main class="main">
    <div class="container">
        <div class="d-flex flex-column flex-md-row justify-content-md-between mb-high-md">
            <div class="intro d-flex order-2 order-md-1 align-items-center">
                <div class="intro-text">
                    <h1 class="heading-primary">Get things done, together.</h1>
                    <p class="description">Create easily shareable to-do lists that automatically stay in sync and display updates in real time.</p>
                    <a href="{{ route('checklists.create') }}" class="button button-primary">Start Your List</a>
                </div>
            </div>
            <div class="graphic d-flex order-1 order-md-2 text-right">
                <img src="/assets/images/undraw-to-do-list.svg" width="1155" height="796" alt="Illustration of a to-do list being checked off" title="">
            </div>
        </div>
        <div class="row mb-high">
            <div class="col-sm-12 text-center">
                <h2 class="heading-secondary">Step 1.</h2>
                <p class="description">Tap the button above to create your new list at a unique url.</p>
                <div class="screenshot">
                    <img src="/assets/images/listpal-screenshot-new.png" alt="Screenshot of the ListPal new list screen on an iPhone" title="">
                </div>
            </div>
        </div>
        <div class="row mb-high">
            <div class="col-sm-12 text-center">
                <h2 class="heading-secondary">Step 2.</h2>
                <p class="description">Add in your items one right after another, or choose to close the prompt after your item has been saved.</p>
                <div class="screenshot">
                    <img src="/assets/images/listpal-screenshot-adding-items.png" alt="Screenshot of adding items to a ListPal list on an iPhone" title="">
                </div>
            </div>
        </div>
        <div class="row mb-high">
            <div class="col-sm-12 text-center">
                <h2 class="heading-secondary">Step 3.</h2>
                <p class="description">Copy and send your list's unique link to anyone you'd like to share it with.</p>
                <div class="screenshot">
                    <img src="/assets/images/listpal-screenshot-copy-link.png" alt="Screenshot copying a link for a ListPal list on an iPhone" title="">
                </div>
            </div>
        </div>
        <div class="row mb-high">
            <div class="col-sm-12 text-center">
                <h2 class="heading-secondary">Step 4.</h2>
                <p class="description">See any updates or additions that you and your friends make to the list in real time.</p>
                <div class="screenshot">
                    <img src="/assets/images/listpal-screenshot-checked-off.png" alt="Screenshot on an iPhone showing ListPal with items checked off" title="">
                </div>
            </div>
        </div>
        <div class="row mb-high">
            <div class="col-sm-12 text-center">
                <h2 class="heading-secondary">Ready to get started?</h2><br>
                <a href="{{ route('checklists.create') }}" class="button button-primary">Create Your List</a>
            </div>
        </div>
    </div>
</main>
<footer class="footer">
    <div class="copyright text-center">
        <p>ListPal is a 100% free and open source project by <a href="https://twitter.com/aschmelyun" target="_blank">Andrew Schmelyun</a><br>View the source and roadmap on <a href="https://github.com/aschmelyun/listpal" target="_blank">GitHub</a></p>
    </div>
</footer>
</body>
</html>