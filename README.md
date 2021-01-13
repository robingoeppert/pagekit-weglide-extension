# Pagekit Weglide Extension

## Development
### Prerequisites
- Pagekit instance for testing
- NodeJs, at least version 10.13.0 (LTS)

### Setup
1. Clone this repository, ideally into a working pagekit instance. Path should be `your-pagekit-folder/packages/robingoeppert/weglide/`, where "weglide" is the renamed repository root folder.
2. `npm install`

### Build
Build vue files by running `npx webpack` in pagekit root folder. This only works if the project is mounted in a pagekit instance as mentioned above.

### Deploy
Place all project files (including the built JS files in app/bundle) in your-pagekit-folder/packages/robingoeppert/weglide/