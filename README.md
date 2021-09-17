# Addon for make "on demand" calls to Github Actions

Addon to trigger a Github Action on demand.

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
```

You will have to create your token on Github and create a repository dispatch event:

[https://docs.github.com/en/rest/reference/repos#create-a-repository-dispatch-event](https://docs.github.com/en/rest/reference/repos#create-a-repository-dispatch-event)
