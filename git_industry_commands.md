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