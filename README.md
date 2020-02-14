# BulkImportInstallableExample 

* Clone this repository and enter the directory
* Retrieve the Sugar Module Packager dependency by running: `composer install`
* Clone the dependency into a subdirectory by running: `git clone https://github.com/sugarcrmlabs/BulkImport.git bulkimport`
* Copy the relevant dependency directories and files by running: `cp -R bulkimport/src/custom src/`
* Generate the installable .zip Sugar module with: `./vendor/bin/package 1.4`.
