# Contributing

## Branch name
If you commit directly to the main repository, the branch names should follow the convention:
* `feature/JIRA-ID` for tasks, user stories, etc 
* `bugfix/JIRA-ID` for bugs
* `hotfix/JIRA-ID` for production bugs that need to be addressed immediately

## Commit messages
The commit messages should follow the convention:

```
commit title with no more than 50 characters, first word in lowercase, at present tense, and no period at the end
[empty line]
Write a description with that was done and why do not exceed 72 characters (optional)
[empty line]
Issue: Jira-ID (in case of tasks, user stories, etc) (required, if exists) 
Fixes: Jira-ID (in case of bugs, add multiple Jira-IDs separated with a comma if it fixes multiple bugs) (required, if exists)
```

### Examples

#### Commit title with Jira issue
```
add button on homepage

Issue: JRA-15
```

#### Commit title with no Jira issue
This should only be used in case there is no Jira issue created.

```
add configuration for CI build
```

#### Commit title with body

```
remove image gallery on events page

This has been done because events rarely have images.

Issue: JRA-17 
```

#### Commit that fixes multiple bugs

```
fix sending email in contact form

Fixes: JRA-20, JRA-83
```

## Workflow
1) In Jira put your task In Progress

2) After changes are done, commit and push changes to your branch (create as many commits as possible)

3) Make sure your branch passes continous integration (CI) build

4) Create pull request

5) Deploy your branch on the test environment and make sure everything works according to the task requirements

6) In Jira put the task in QA

7) Repeat until the task is closed
