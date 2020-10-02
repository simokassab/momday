# Momday
Momday Backend

## Adding this repo to an existing opencart project:
##### Clone just the repository's .git folder (excluding files as they are already in \`existing-dir`) into an empty temporary directory
    git clone --no-checkout repo-to-clone existing-dir/existing-dir.tmp # might want --no-hardlinks for cloning local repo

##### Move the .git folder to the directory with the files. This makes `existing-dir` a git repo.
    mv existing-dir/existing-dir.tmp/.git existing-dir/

##### Delete the temporary directory
    rmdir existing-dir/existing-dir.tmp
    cd existing-dir

##### git thinks all files are deleted, this reverts the state of the repo to HEAD. WARNING: any local changes to the files will be lost.
    git reset --hard HEAD
    
## Committing files from terminal
    git add -u
git add -u stages modified and deleted files, without staging new files  
git add -u looks at all the already tracked files and stages the changes to those files if they are different or if they have been removed. It does not add any new files, it only stages changes to already tracked files.

## Opencart Modifications
system/config/catalog.php  
catalog/model/catalog/review.php  
catalog/model/account/customer.php  
catalog/model/catalog/product.php  
admin/config.php
admin/controller/common/column_left.php  
admin/view/template/common/column_left.twig #committed but no change
catalog/controller/product/product.php #not committed before change but commented
catalog/language/en-gb/product/product.php #not committed before change: added celebrity text
catalog/language/ar/product/product.php #not committed before change: added celebrity text
catalog/view/theme/journal2/template/product/product.twig

## Opencart-api Modifications
catalog/controller/rest/cart.php  
system/library/cart/cart.php  
catalog/controller/rest/wishlist.php
catalog/controller/rest/register.php  
catalog/controller/feed/rest_api.php  

## Aramex tools
catalog/controller/aramex/location/Location-API-WSDL.wsdl  
