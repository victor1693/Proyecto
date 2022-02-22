<ul class="nav nav-tabs nav-overflow header-tabs">
    <li class="nav-item">
        <a class="nav-link" id="navlink-analytics" href="<?= Request::root();?>/campaign-analytics/<?= $token;?>">
            <span class="fe fe-bar-chart text-muted mb-0">
            </span>
            Analytics
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" id="navlink-performance" href="<?= Request::root();?>/campaign-performance/<?= $token;?>">
            <span class="fe fe-list text-muted mb-0">
            </span>
            Performance
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="navlink-analysis" href="<?= Request::root();?>/campaign-audio-analysis/<?= $token;?>">
            <span class="fe fe-cpu text-muted mb-0">
            </span>
            Audio Analysis
            <span class="badge bg-primary-soft" style="width: 30px;">
                AI
            </span>
        </a>
    </li>
</ul>