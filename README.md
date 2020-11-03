# Save The Date 2020
Prototype for the Save The Date 2020 site.

## Usage
#### Install dependencies:
```
yarn install
```

#### Watching file changes
3 options to start webpack compiling with file watching:
```
// starting with notifications that notify on every compile
yarn start
// starting with no notifications
yarn start-silent
// starting with only notifying on first build, error, and first build after error
yarn start-simple
```

#### Linting JS
Any JS you write should adhere to our [coding standards](https://tfs.clarkinc.biz/tfs/DefaultCollection/JavaScript%20Development%20Guide). We also use [ESLint](https://eslint.org/) to automatically check to make sure you follow these standards. To run the linter, run
```
yarn lint-js
```

There's also the option to use a pre-commit git hook. It's as simple as create a file called `pre-commit` with no extension in `.git/hooks` and adding this to the file:
```
#!/bin/bash

STAGED_FILES="$(git diff --cached --name-status | awk '$1 != "D" && /\.(js|jsx)$/ { print $2 }')"

if [[ $((${#STAGED_FILES} + 0)) > 0 ]];
then
    echo "$STAGED_FILES" | tr '\n' ' '

    yarn eslint $STAGED_FILES

    RESULT=$?
    if [ $RESULT -eq 0 ];
    then
        printf "
        \e[32mLinting checks out\e[0m
        
        "
        exit 0
    else
        printf "
        \e[31mLinting failed\e[0m
        "
        exit 1
    fi
else
    echo "No changes to lint"
    exit 0
fi
```
The next time you run `git commit` it will run the linter and only commit if your code passes.

#### Issues with linting

If you have issues like the linter not actually running, make sure you have permissions to execute the file by running
```
chmod +x -R .git/hooks
```

#### Building for Develop
To compile the files without watching, run:
```
yarn compile
```

#### Building for Production
To compile the files and minify them, run:
```
yarn build
```
