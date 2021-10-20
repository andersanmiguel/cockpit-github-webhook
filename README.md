# Make "on demand" calls to Github Actions from Cockpit CMS

Addon for [Cockpit CMS](https://getcockpit.com/) to trigger a Github Action on demand.

## Install

* Clone the repo or download the code and place it in: `path/to/cockpit/addons/GithubWebhook`

```bash
cd path/to/cockpit/addons
git clone https://github.com/andersanmiguel/cockpit-github-webhook.git GithubWebhook
```

* Add param to the config.yaml

```yaml
# Cockpit settings
githubwebhook:
  url: 'https://api.github.com/repos/{user}/{repo}/dispatches'
  token: 'ghp_XXXXXXXXXXXXXXXXXXXXXXXXXXX'
  event_type: 'Update from Cockpit CMS'
```

* Update your workflow yaml file
```yaml
on:
  repository_dispatch:
    types:
      - Update from Cockpit CMS
```

You will have to create your token on Github and create a repository dispatch event:

[https://docs.github.com/en/rest/reference/repos#create-a-repository-dispatch-event](https://docs.github.com/en/rest/reference/repos#create-a-repository-dispatch-event)

## Usage

* Click on the "Deploy Site" button on the main menu
* Click on the "Publish Site" link on the page

If the request is succesfull you should read: "Ok, in a few minutes the changes will be published" else you should read: "Whoooo, something went wrong, the response code was: XXX" where XXX is the response code from Github.

> :warning: **Note**: The created token is an alternative to your password, if someone has access to your token will be able to act on your behalf in Github. Is your responsability to secure the Cockpit config folder where it will be stored
 
