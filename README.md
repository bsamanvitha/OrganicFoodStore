# OrganicFoodStore
CS 160 Software Engineering Project


## Instructions for Git use

### setting up from scratch
1. create new folder 'OrganicFoodStore' with directory: /path-to-XAMPP/xammpfiles/htdocs/OrganicFoodStore
2. init repo and add remote

   ```
   git init
   ```
   ```
   git remote add origin https://github.com/samanvithab/OrganicFoodStore.git
   ```
3. get stuff from github

   ```
   git pull origin master
   ```
   
4. run with XAMPP

### to add changes to Github repo
1. Save local changes.

```
    git add -A
    git commit -m "blah blah"
```

2. Merge remote changes

```
   git pull origin master
```
NOTE: solve any merge conflicts with your favorite IDE. I use Atom w/ the 'merge-conflict' package. 
      run 'git commit' to save merged changes.

3. Push commit(s) to remote
   
   ```
   git push origin master
   ```
   
### HELPFUL LINKS

- git guide: http://rogerdudler.github.io/git-guide/
