
plugin.tx_pxjobs_jobs {
    view {
        templateRootPaths.0 = EXT:px_jobs/Resources/Private/Templates/
        templateRootPaths.1 = {$plugin.tx_pxjobs_jobs.view.templateRootPath}
        partialRootPaths.0 = EXT:px_jobs/Resources/Private/Partials/
        partialRootPaths.1 = {$plugin.tx_pxjobs_jobs.view.partialRootPath}
        layoutRootPaths.0 = EXT:px_jobs/Resources/Private/Layouts/
        layoutRootPaths.1 = {$plugin.tx_pxjobs_jobs.view.layoutRootPath}
    }
    persistence {
        storagePid = {$plugin.tx_pxjobs_jobs.persistence.storagePid}
        #recursive = 1
    }
    features {
        #skipDefaultArguments = 1
        # if set to 1, the enable fields are ignored in BE context
        ignoreAllEnableFieldsInBe = 0
        # Should be on by default, but can be disabled if all action in the plugin are uncached
        requireCHashArgumentForActionArguments = 1
    }
    mvc {
        #callDefaultActionIfActionCantBeResolved = 1
    }

}

#/-----------------------------------\
# Get Category Record
#\-----------------------------------/
lib.categories = CONTENT
lib.categories {
    table = sys_category
    select {
        pidInList = 310
        uidInList.field = recordUid
    }
    renderObj = COA
    renderObj {
        1 = TEXT
        1 {
            field = title
        }
    }
}