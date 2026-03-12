#Industry level git commands
**Name:**Prasanna

## 1.git configuration commands
### 1.git config --global user.name
**syntax**
git config --global user.name "your name"
**purpose**
sets the username used for git commits
**examlpe**
git config --global user.name "prasanna-220511"


### 2.git config --global user.email
**syntax**
git config --global user.email "your email address"
**purpose**
sets the email associated git commits.
**examlpe**
git config --global user.email "prasanna-220511"


### 3.git config --list
**syntax**
git config --list
**purpose**
Displays all Git configuration settings currently stored on the system, including username, email, editor, and other Git options.
**examlpe**
git config --list


### 4.git config --unset
**syntax**
git config --global --unset user.name
**purpose**
Removes a specific configuration setting from Git, such as removing the stored username or email.
**examlpe**
git config --global --unset user.name
**screenshot**



## 2. Repository Setup Commands
### 1.git init
**syntax**
git init
**purpose**
Initializes a new Git repository in the current directory so that Git can start tracking files and changes.
**examlpe**
git init


### 2.git clone
**syntax**
git clone <repository-url>
**purpose**
Creates a local copy of an existing remote repository from GitHub or another Git server.
**examlpe**
git clone https://github.com/prasanna-220511/WTLab_220511.git


### 3.git clone --branch
**syntax**
git clone <branch-name><repository-url>
**purpose**
Clones a specific branch of a repository instead of the default branch.
**examlpe**
git clone https://github.com/prasanna-220511/WTLab_220511.git


### 4.git clone --depth
**syntax**
git clone <branch-name><repository-url>
**purpose**
Performs a shallow clone by downloading only a limited number of commits, which makes cloning faster and saves storage.
**examlpe**
git clone --depth 1 https://github.com/prasanna-220511/WTLab_220511.git
**screenshot**


## 3. Repository Status & Inspection Commands
### 1. git status
**Syntax**
git status
**Purpose**
Shows the current state of the repository including modified files, staged files, and untracked files.
**Example**
git status

### 2. git log
**Syntax**
git log
**Purpose**
Displays the complete commit history of the repository including commit ID, author, date, and message.
**Example**
git log

### 3. git log --oneline
**Syntax**
git log --oneline
**Purpose**
Shows the commit history in a compact single-line format for each commit.
**Example**
git log --oneline

### 4. git log --graph
**Syntax**
git log --graph
**Purpose**
Displays the commit history in a graphical tree structure showing branch and merge relationships.
**Example**
git log --graph
**Screenshot**

### 5. git show
**Syntax**
git show <commit-id>
**Purpose**
Displays detailed information about a specific commit including the changes made in that commit.
**Example**
git show HEAD

### 6. git diff
**Syntax**
git diff
**Purpose**
Shows the differences between the working directory and the last committed version of the files.
**Example**
git diff

### 7. git diff --staged
**Syntax**
git diff --staged
**Purpose**
Shows the differences between staged changes and the last commit.
**Example**
git diff --staged

### 8. git blame
**Syntax**
git blame <file-name>
**Purpose**
Displays information about who last modified each line of a file and in which commit.
**Example**
git blame README.md

### 9. git reflog
**Syntax**
git reflog
**Purpose**
Shows the history of updates to the HEAD pointer and helps recover lost commits.
**Example**
git reflog

### 10. git shortlog
**Syntax**
git shortlog
**Purpose**
Displays a summarized list of commits grouped by author.
**Example**
git shortlog
**screenshot**

## 4. File Tracking Commands
### 1. git add
**Syntax**
git add <file-name>
**Purpose**
Adds a specific file to the staging area so it will be included in the next commit.
**Example**
git add test.txt
**screenshot**

### 2. git add .
**Syntax**
git add .
**Purpose**
Adds all new and modified files in the current directory to the staging area.
**Example**
git add .
**screenshot**

### 3. git add -p
**Syntax**
git add -p
**Purpose**
Allows staging changes interactively by selecting specific parts (patches) of a file.
**Example**
git add -p

### 4. git restore
**Syntax**
git restore <file-name>
**Purpose**
Restores a file in the working directory to the last committed version.
**Example**
git restore test.txt

### 5. git restore --staged
**Syntax**
git restore --staged <file-name>
**Purpose**
Removes a file from the staging area but keeps the changes in the working directory.
**Example**
git restore --staged test.txt

### 6. git rm
**Syntax**
git rm <file-name>
**Purpose**
Deletes a file from both the working directory and the Git repository.
**Example**
git rm test.txt

### 7. git mv
**Syntax**
git mv <old-file-name> <new-file-name>
**Purpose**
Renames or moves a file and tracks the change in Git.
**Example**
git mv old.txt new.txt


## 5. Commit Commands
### 1. git commit
**Syntax**
git commit
**Purpose**
Creates a new commit by saving the staged changes to the repository history.
**Example**
git commit

### 2. git commit -m
**Syntax**
git commit -m "commit message"
**Purpose**
Creates a commit with a message describing the changes made in the commit.
**Example**
git commit -m "Added new feature"

### 3. git commit --amend
**Syntax**
git commit --amend
**Purpose**
Modifies the most recent commit by changing its message or adding new staged changes.
**Example**
git commit --amend

### 4. git commit --no-edit
**Syntax**
git commit --no-edit
**Purpose**
Amends the last commit without changing its existing commit message.
**Example**
git commit --no-edit

## 6. Branch Management Commands
### 1. git branch
**Syntax**
git branch
**Purpose**
Lists all branches in the current repository and shows the active branch.
**Example**
git branch

### 2. git branch -a
**Syntax**
git branch -a
**Purpose**
Displays all branches including local and remote branches.
**Example**
git branch -a

### 3. git branch -d
**Syntax**
git branch -d <branch-name>
**Purpose**
Deletes a branch safely if it has already been merged.
**Example**
git branch -d feature1

### 4. git branch -D
**Syntax**
git branch -D <branch-name>
**Purpose**
Forces deletion of a branch even if it has not been merged.
**Example**
git branch -D feature1

### 5. git checkout
**Syntax**
git checkout <branch-name>
**Purpose**
Switches from the current branch to another branch.
**Example**
git checkout main

### 6. git checkout -b
**Syntax**
git checkout -b <branch-name>
**Purpose**
Creates a new branch and immediately switches to it.
**Example**
git checkout -b feature1

### 7. git switch
**Syntax**
git switch <branch-name>
**Purpose**
Switches to an existing branch (modern alternative to checkout).
**Example**
git switch main

### 8. git switch -c
**Syntax**
git switch -c <branch-name>
**Purpose**
Creates a new branch and switches to it in a single command.
**Example**
git switch -c feature2


## 7. Merge & Integration Commands
### 1. git merge
**Syntax**
git merge <branch-name>
**Purpose**
Combines changes from the specified branch into the current branch.
**Example**
git merge feature1

### 2. git merge --no-ff
**Syntax**
git merge --no-ff <branch-name>
**Purpose**
Merges a branch using a merge commit even when a fast-forward merge is possible, preserving branch history.
**Example**
git merge --no-ff feature1


## 8. Remote Repository Commands
### 1. git remote
**Syntax**
git remote
**Purpose**
Displays the names of remote repositories connected to the local repository.
**Example**
git remote

### 2. git remote -v
**Syntax**
git remote -v
**Purpose**
Shows the remote repository URLs for fetch and push operations.
**Example**
git remote -v

### 3. git remote add
**Syntax**
git remote add <name> <repository-url>
**Purpose**
Adds a new remote repository to the local Git project.
**Example**
git remote add origin https://github.com/username/repository.git

### 4. git remote remove
**Syntax**
git remote remove <name>
**Purpose**
Removes a remote repository reference from the local repository.
**Example**
git remote remove origin

### 5. git fetch
**Syntax**
git fetch
**Purpose**
Downloads commits, branches, and updates from the remote repository without merging them.
**Example**
git fetch

### 6. git fetch --all
**Syntax**
git fetch --all
**Purpose**
Fetches updates from all configured remote repositories.
**Example**
git fetch --all

### 7. git pull
**Syntax**
git pull
**Purpose**
Fetches changes from the remote repository and merges them into the current branch.
**Example**
git pull

### 8. git pull --rebase
**Syntax**
git pull --rebase
**Purpose**
Fetches changes from the remote repository and rebases the current branch instead of merging.
**Example**
git pull --rebase

### 9. git push
**Syntax**
git push
**Purpose**
Uploads local commits to the remote repository.
**Example**
git push

### 10. git push -u origin branch-name
**Syntax**
git push -u origin <branch-name>
**Purpose**
Pushes a branch to the remote repository and sets the upstream tracking branch.
**Example**
git push -u origin main

### 11. git push --force
**Syntax**
git push --force
**Purpose**
Forces the local branch to overwrite the remote branch history.
**Example**
git push --force


## 9. Stash Commands
### 1. git stash
**Syntax**
git stash
**Purpose**
Temporarily saves uncommitted changes in the working directory so you can work on something else.
**Example**
git stash

### 2. git stash list
**Syntax**
git stash list
**Purpose**
Displays the list of all saved stashes.
**Example**
git stash list

### 3. git stash pop
**Syntax**
git stash pop
**Purpose**
Applies the most recent stash and removes it from the stash list.
**Example**
git stash pop

### 4. git stash apply
**Syntax**
git stash apply
**Purpose**
Applies the most recent stash but keeps it in the stash list.
**Example**
git stash apply

### 5. git stash drop
**Syntax**
git stash drop
**Purpose**
Deletes a specific stash from the stash list.
**Example**
git stash drop stash@{0}

### 6. git stash clear
**Syntax**
git stash clear
**Purpose**
Removes all stashes from the stash list permanently.
**Example**
git stash clear


## 10. Reset & Undo Commands
### 1. git reset
**Syntax**
git reset <file-name>
**Purpose**
Unstages a file from the staging area while keeping the changes in the working directory.
**Example**
git reset test.txt

### 2. git reset --soft
**Syntax**
git reset --soft <commit-id>
**Purpose**
Moves the HEAD to a previous commit but keeps changes staged.
**Example**
git reset --soft HEAD~1

### 3. git reset --mixed
**Syntax**
git reset --mixed <commit-id>
**Purpose**
Moves the HEAD to a previous commit and unstages changes but keeps them in the working directory.
**Example**
git reset --mixed HEAD~1

### 4. git reset --hard
**Syntax**
git reset --hard <commit-id>
**Purpose**
Moves the HEAD to a previous commit and discards all changes in the working directory and staging area.
**Example**
git reset --hard HEAD~1

### 5. git revert
**Syntax**
git revert <commit-id>
**Purpose**
Creates a new commit that reverses the changes introduced by a specific commit.
**Example**
git revert HEAD

### 6. git clean -f
**Syntax**
git clean -f
**Purpose**
Removes untracked files from the working directory.
**Example**
git clean -f

### 7. git clean -fd
**Syntax**
git clean -fd
**Purpose**
Removes untracked files and directories from the working directory.
**Example**
git clean -fd


## 11. Rebasing Commands
### 1. git rebase
**Syntax**
git rebase <branch-name>
**Purpose**
Reapplies commits from the current branch on top of another branch to create a linear commit history.
**Example**
git rebase main

### 2. git rebase -i
**Syntax**
git rebase -i <commit-id>
**Purpose**
Performs an interactive rebase allowing you to edit, reorder, squash, or remove commits.
**Example**
git rebase -i HEAD~3

### 3. git rebase --continue
**Syntax**
git rebase --continue
**Purpose**
Continues the rebase process after resolving conflicts during a rebase.
**Example**
git rebase --continue

### 4. git rebase --abort
**Syntax**
git rebase --abort
**Purpose**
Cancels the rebase operation and returns the branch to its previous state.
**Example**
git rebase --abort


## 12. Cherry Pick & Patch Commands
### 1. git cherry-pick
**Syntax**
git cherry-pick <commit-id>
**Purpose**
Applies the changes from a specific commit from another branch into the current branch.
**Example**
git cherry-pick 1a2b3c

### 2. git format-patch
**Syntax**
git format-patch <commit-id>
**Purpose**
Creates patch files from commits which can be shared and applied to other repositories.
**Example**
git format-patch HEAD~1

### 3. git apply
**Syntax**
git apply <patch-file>
**Purpose**
Applies the changes from a patch file to the working directory.
**Example**
git apply patch-file.patch

### 4. git am
**Syntax**
git am <patch-file>
**Purpose**
Applies a patch file and creates a commit automatically.
**Example**
git am patch-file.patch


## 13. Tagging Commands
### 1. git tag
**Syntax**
git tag
**Purpose**
Lists all tags available in the repository.
**Example**
git tag

### 2. git tag -a
**Syntax**
git tag -a <tag-name> -m "message"
**Purpose**
Creates an annotated tag with a message for a specific commit.
**Example**
git tag -a v1.0 -m "First release"

### 3. git tag -d
**Syntax**
git tag -d <tag-name>
**Purpose**
Deletes a tag from the local repository.
**Example**
git tag -d v1.0

### 4. git push origin --tags
**Syntax**
git push origin --tags
**Purpose**
Pushes all local tags to the remote repository.
**Example**
git push origin --tags


## 14. Submodule Commands
### 1. git submodule add
**Syntax**
git submodule add <repository-url>
**Purpose**
Adds another Git repository as a submodule inside the current repository.
**Example**
git submodule add https://github.com/user/library.git

### 2. git submodule init
**Syntax**
git submodule init
**Purpose**
Initializes local configuration for submodules in the repository.
**Example**
git submodule init

### 3. git submodule update
**Syntax**
git submodule update
**Purpose**
Fetches and updates the submodule repositories to match the commit specified in the main repository.
**Example**
git submodule update


## 15. Debugging Commands
### 1. git bisect
**Syntax**
git bisect
**Purpose**
Uses binary search to find the commit that introduced a bug.
**Example**
git bisect

### 2. git bisect start
**Syntax**
git bisect start
**Purpose**
Starts the bisect process to locate a faulty commit.
**Example**
git bisect start

### 3. git bisect good
**Syntax**
git bisect good <commit-id>
**Purpose**
Marks a commit as good (not containing the bug) during the bisect process.
**Example**
git bisect good HEAD~3

### 4. git bisect bad
**Syntax**
git bisect bad <commit-id>
**Purpose**
Marks a commit as bad (containing the bug) during the bisect process.
**Example**
git bisect bad HEAD