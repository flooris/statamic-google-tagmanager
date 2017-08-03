# Google Tag Manager for Statamic 2
*Requirement:* Statamic v2.x  
*Version:* 1.0.0

### What is this?
Add Google Tag Manager support to Statamic 2 and configure tracking from the Control Panel

### Installation
- Rename the folder `GoogleTagmanager` and copy it to your `site/addons` folder

### Usage
- Use the settings to configure your Google Tag Manager ID or create a settings file in `site/settings/addons/google_tagmanager.yaml`
```
tagmanager_id: GTM-*******

```
- Manually add the tag to your theme layout file just before your close `</head>` tag.

```
  {{ google_tagmanager:head }}
```
- Manually add the tag to your theme layout file just after your opening `<body>` tag.

```
  {{ google_tagmanager:body }}
```
