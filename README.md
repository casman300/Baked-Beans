# Baked-Beans - *The statistical analysis of baked beans*

Contributors: <!-- ALL-CONTRIBUTORS-BADGE:START - Do not remove or modify this section -->
[![All Contributors](https://img.shields.io/badge/all_contributors-3-orange.svg?style=flat-square)](#contributors-)
<!-- ALL-CONTRIBUTORS-BADGE:END -->
Buddy Pipeline Status: [![buddy pipeline](https://app.buddy.works/casman/baked-beans/pipelines/pipeline/69703/badge.svg?token=d342c18d82f8d23eb914355cabc8c737b8d249ccd964e88859fa87d54774eeb5 "buddy pipeline")](https://app.buddy.works/casman/baked-beans/pipelines/pipeline/69703)

This is still a very much work in progress project! Lots of work is required to get the website running correctly and setting up a back-end database before we can use it to start comparing data.

We also need to collect data!! We sort of have a standardized produce but need to test this.


## Local Development Instructions

When you fork or download the project to work on locally there will be the dbsettings.php and config.php files missing from the includes directory. The are demo versions of each so you will have to copy and rename the demo files and update the settings to match your Local setup. There are also the blank & demo SQL files in the documentation area for experimenting with locally.

If you need help getting setup you can reach out to us on the discussions tab on GitHub.


## Buddy Pipeline

We use Buddy to handle the build pipeline for continues integration. This is triggered by new commits to the Main branch. Currently This just uploads the files to FTP and completes some SSL and page tests after deployment. The plan will be to add in minification for CSS and JS files as well as images to help optimise page speeds and to also do some automated testing to make sure new developments haven't broken anything! (Looking at you Microsoft and you case insensitivity!)


## Contributors ✨

Thanks goes to these wonderful people ([emoji key](https://allcontributors.org/docs/en/emoji-key)):

<!-- ALL-CONTRIBUTORS-LIST:START - Do not remove or modify this section -->
<!-- prettier-ignore-start -->
<!-- markdownlint-disable -->
<table>
  <tr>
    <td align="center"><a href="http://www.casman.co.uk"><img src="https://avatars.githubusercontent.com/u/2879023?v=4?s=100" width="100px;" alt=""/><br /><sub><b>Charlie Seaman</b></sub></a><br /><a href="#maintenance-casman300" title="Maintenance">🚧</a></td>
    <td align="center"><a href="https://github.com/turbotas"><img src="https://avatars.githubusercontent.com/u/12105630?v=4?s=100" width="100px;" alt=""/><br /><sub><b>Turbo Tas</b></sub></a><br /><a href="#maintenance-turbotas" title="Maintenance">🚧</a></td>
    <td align="center"><a href="https://github.com/atayl16"><img src="https://avatars.githubusercontent.com/u/24377351?v=4?s=100" width="100px;" alt=""/><br /><sub><b>Alisha Taylor</b></sub></a><br /><a href="https://github.com/casman300/Baked-Beans/issues?q=author%3Aatayl16" title="Bug reports">🐛</a></td>
  </tr>
</table>

<!-- markdownlint-restore -->
<!-- prettier-ignore-end -->

<!-- ALL-CONTRIBUTORS-LIST:END -->

This project follows the [all-contributors](https://github.com/all-contributors/all-contributors) specification. Contributions of any kind welcome!
