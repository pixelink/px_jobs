
plugin.tx_pxjobs_jobs {
    view {
        # cat=plugin.tx_pxjobs_jobs/file; type=string; label=Path to template root (FE)
        templateRootPath = EXT:px_jobs/Resources/Private/Templates/
        # cat=plugin.tx_pxjobs_jobs/file; type=string; label=Path to template partials (FE)
        partialRootPath = EXT:px_jobs/Resources/Private/Partials/
        # cat=plugin.tx_pxjobs_jobs/file; type=string; label=Path to template layouts (FE)
        layoutRootPath = EXT:px_jobs/Resources/Private/Layouts/
    }
    persistence {
        # cat=plugin.tx_pxjobs_jobs//a; type=string; label=Default storage PID
        storagePid =
    }

}
