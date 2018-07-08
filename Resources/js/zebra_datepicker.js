




<!DOCTYPE html>
<html class="   ">
  <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# object: http://ogp.me/ns/object# article: http://ogp.me/ns/article# profile: http://ogp.me/ns/profile#">
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    
    <title>Zebra_Datepicker/public/javascript/zebra_datepicker.js at master · stefangabos/Zebra_Datepicker · GitHub</title>
    <link rel="search" type="application/opensearchdescription+xml" href="/opensearch.xml" title="GitHub" />
    <link rel="fluid-icon" href="https://github.com/fluidicon.png" title="GitHub" />
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-114.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-144.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144.png" />
    <meta property="fb:app_id" content="1401488693436528"/>

      <meta content="@github" name="twitter:site" /><meta content="summary" name="twitter:card" /><meta content="stefangabos/Zebra_Datepicker" name="twitter:title" /><meta content="Zebra_Datepicker - A super-lightweight, highly configurable, cross-browser date picker jQuery plugin." name="twitter:description" /><meta content="https://avatars1.githubusercontent.com/u/741165?s=400" name="twitter:image:src" />
<meta content="GitHub" property="og:site_name" /><meta content="object" property="og:type" /><meta content="https://avatars1.githubusercontent.com/u/741165?s=400" property="og:image" /><meta content="stefangabos/Zebra_Datepicker" property="og:title" /><meta content="https://github.com/stefangabos/Zebra_Datepicker" property="og:url" /><meta content="Zebra_Datepicker - A super-lightweight, highly configurable, cross-browser date picker jQuery plugin." property="og:description" />

    <link rel="assets" href="https://assets-cdn.github.com/">
    <link rel="conduit-xhr" href="https://ghconduit.com:25035/">
    <link rel="xhr-socket" href="/_sockets" />

    <meta name="msapplication-TileImage" content="/windows-tile.png" />
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="selected-link" value="repo_source" data-pjax-transient />
    <meta content="collector.githubapp.com" name="octolytics-host" /><meta content="collector-cdn.github.com" name="octolytics-script-host" /><meta content="github" name="octolytics-app-id" /><meta content="CA5C8188:522A:768F2C9:5379D8F1" name="octolytics-dimension-request_id" />
    

    
    
    <link rel="icon" type="image/x-icon" href="https://assets-cdn.github.com/favicon.ico" />

    <meta content="authenticity_token" name="csrf-param" />
<meta content="BL5jkNfKPeHraoSwjXFD9yHcRD810dA90/Hj+1q6zYkOZwx/wsGkvztdG6oTr0yq5Ra9fMvbk+m9tgLgJ663bA==" name="csrf-token" />

    <link href="https://assets-cdn.github.com/assets/github-da7475c114a3c2eab7b91a0584202a89fd188935.css" media="all" rel="stylesheet" type="text/css" />
    <link href="https://assets-cdn.github.com/assets/github2-a49192fef33ef6e2053a634597427056eb62d634.css" media="all" rel="stylesheet" type="text/css" />
    


    <meta http-equiv="x-pjax-version" content="e22dc102a1df9d45c9f2153cbc5fc5b0">

      
  <meta name="description" content="Zebra_Datepicker - A super-lightweight, highly configurable, cross-browser date picker jQuery plugin." />

  <meta content="741165" name="octolytics-dimension-user_id" /><meta content="stefangabos" name="octolytics-dimension-user_login" /><meta content="9604495" name="octolytics-dimension-repository_id" /><meta content="stefangabos/Zebra_Datepicker" name="octolytics-dimension-repository_nwo" /><meta content="true" name="octolytics-dimension-repository_public" /><meta content="false" name="octolytics-dimension-repository_is_fork" /><meta content="9604495" name="octolytics-dimension-repository_network_root_id" /><meta content="stefangabos/Zebra_Datepicker" name="octolytics-dimension-repository_network_root_nwo" />
  <link href="https://github.com/stefangabos/Zebra_Datepicker/commits/master.atom" rel="alternate" title="Recent Commits to Zebra_Datepicker:master" type="application/atom+xml" />

  </head>


  <body class="logged_out  env-production linux vis-public page-blob">
    <a href="#start-of-content" tabindex="1" class="accessibility-aid js-skip-to-content">Skip to content</a>
    <div class="wrapper">
      
      
      
      


      
      <div class="header header-logged-out">
  <div class="container clearfix">

    <a class="header-logo-wordmark" href="https://github.com/">
      <span class="mega-octicon octicon-logo-github"></span>
    </a>

    <div class="header-actions">
        <a class="button primary" href="/join">Sign up</a>
      <a class="button signin" href="/login?return_to=%2Fstefangabos%2FZebra_Datepicker%2Fblob%2Fmaster%2Fpublic%2Fjavascript%2Fzebra_datepicker.js">Sign in</a>
    </div>

    <div class="command-bar js-command-bar  in-repository">

      <ul class="top-nav">
          <li class="explore"><a href="/explore">Explore</a></li>
        <li class="features"><a href="/features">Features</a></li>
          <li class="enterprise"><a href="https://enterprise.github.com/">Enterprise</a></li>
          <li class="blog"><a href="/blog">Blog</a></li>
      </ul>
        <form accept-charset="UTF-8" action="/search" class="command-bar-form" id="top_search_form" method="get">

<div class="commandbar">
  <span class="message"></span>
  <input type="text" data-hotkey="s" name="q" id="js-command-bar-field" placeholder="Search or type a command" tabindex="1" autocapitalize="off"
    
    
      data-repo="stefangabos/Zebra_Datepicker"
      data-branch="master"
      data-sha="8fef8859442fadcdce1471131b62896d59f26428"
  >
  <div class="display hidden"></div>
</div>

    <input type="hidden" name="nwo" value="stefangabos/Zebra_Datepicker" />

    <div class="select-menu js-menu-container js-select-menu search-context-select-menu">
      <span class="minibutton select-menu-button js-menu-target" role="button" aria-haspopup="true">
        <span class="js-select-button">This repository</span>
      </span>

      <div class="select-menu-modal-holder js-menu-content js-navigation-container" aria-hidden="true">
        <div class="select-menu-modal">

          <div class="select-menu-item js-navigation-item js-this-repository-navigation-item selected">
            <span class="select-menu-item-icon octicon octicon-check"></span>
            <input type="radio" class="js-search-this-repository" name="search_target" value="repository" checked="checked" />
            <div class="select-menu-item-text js-select-button-text">This repository</div>
          </div> <!-- /.select-menu-item -->

          <div class="select-menu-item js-navigation-item js-all-repositories-navigation-item">
            <span class="select-menu-item-icon octicon octicon-check"></span>
            <input type="radio" name="search_target" value="global" />
            <div class="select-menu-item-text js-select-button-text">All repositories</div>
          </div> <!-- /.select-menu-item -->

        </div>
      </div>
    </div>

  <span class="help tooltipped tooltipped-s" aria-label="Show command bar help">
    <span class="octicon octicon-question"></span>
  </span>


  <input type="hidden" name="ref" value="cmdform">

</form>
    </div>

  </div>
</div>



      <div id="start-of-content" class="accessibility-aid"></div>
          <div class="site" itemscope itemtype="http://schema.org/WebPage">
    <div id="js-flash-container">
      
    </div>
    <div class="pagehead repohead instapaper_ignore readability-menu">
      <div class="container">
        

<ul class="pagehead-actions">


  <li>
    <a href="/login?return_to=%2Fstefangabos%2FZebra_Datepicker"
    class="minibutton with-count star-button tooltipped tooltipped-n"
    aria-label="You must be signed in to star a repository" rel="nofollow">
    <span class="octicon octicon-star"></span>Star
  </a>

    <a class="social-count js-social-count" href="/stefangabos/Zebra_Datepicker/stargazers">
      77
    </a>

  </li>

    <li>
      <a href="/login?return_to=%2Fstefangabos%2FZebra_Datepicker"
        class="minibutton with-count js-toggler-target fork-button tooltipped tooltipped-n"
        aria-label="You must be signed in to fork a repository" rel="nofollow">
        <span class="octicon octicon-git-branch"></span>Fork
      </a>
      <a href="/stefangabos/Zebra_Datepicker/network" class="social-count">
        66
      </a>
    </li>
</ul>

        <h1 itemscope itemtype="http://data-vocabulary.org/Breadcrumb" class="entry-title public">
          <span class="repo-label"><span>public</span></span>
          <span class="mega-octicon octicon-repo"></span>
          <span class="author"><a href="/stefangabos" class="url fn" itemprop="url" rel="author"><span itemprop="title">stefangabos</span></a></span><!--
       --><span class="path-divider">/</span><!--
       --><strong><a href="/stefangabos/Zebra_Datepicker" class="js-current-repository js-repo-home-link">Zebra_Datepicker</a></strong>

          <span class="page-context-loader">
            <img alt="Octocat-spinner-32" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
          </span>

        </h1>
      </div><!-- /.container -->
    </div><!-- /.repohead -->

    <div class="container">
      <div class="repository-with-sidebar repo-container new-discussion-timeline js-new-discussion-timeline  ">
        <div class="repository-sidebar clearfix">
            

<div class="sunken-menu vertical-right repo-nav js-repo-nav js-repository-container-pjax js-octicon-loaders">
  <div class="sunken-menu-contents">
    <ul class="sunken-menu-group">
      <li class="tooltipped tooltipped-w" aria-label="Code">
        <a href="/stefangabos/Zebra_Datepicker" aria-label="Code" class="selected js-selected-navigation-item sunken-menu-item" data-hotkey="g c" data-pjax="true" data-selected-links="repo_source repo_downloads repo_commits repo_releases repo_tags repo_branches /stefangabos/Zebra_Datepicker">
          <span class="octicon octicon-code"></span> <span class="full-word">Code</span>
          <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>

        <li class="tooltipped tooltipped-w" aria-label="Issues">
          <a href="/stefangabos/Zebra_Datepicker/issues" aria-label="Issues" class="js-selected-navigation-item sunken-menu-item js-disable-pjax" data-hotkey="g i" data-selected-links="repo_issues /stefangabos/Zebra_Datepicker/issues">
            <span class="octicon octicon-issue-opened"></span> <span class="full-word">Issues</span>
            <span class='counter'>7</span>
            <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
</a>        </li>

      <li class="tooltipped tooltipped-w" aria-label="Pull Requests">
        <a href="/stefangabos/Zebra_Datepicker/pulls" aria-label="Pull Requests" class="js-selected-navigation-item sunken-menu-item js-disable-pjax" data-hotkey="g p" data-selected-links="repo_pulls /stefangabos/Zebra_Datepicker/pulls">
            <span class="octicon octicon-git-pull-request"></span> <span class="full-word">Pull Requests</span>
            <span class='counter'>3</span>
            <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>


    </ul>
    <div class="sunken-menu-separator"></div>
    <ul class="sunken-menu-group">

      <li class="tooltipped tooltipped-w" aria-label="Pulse">
        <a href="/stefangabos/Zebra_Datepicker/pulse" aria-label="Pulse" class="js-selected-navigation-item sunken-menu-item" data-pjax="true" data-selected-links="pulse /stefangabos/Zebra_Datepicker/pulse">
          <span class="octicon octicon-pulse"></span> <span class="full-word">Pulse</span>
          <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>

      <li class="tooltipped tooltipped-w" aria-label="Graphs">
        <a href="/stefangabos/Zebra_Datepicker/graphs" aria-label="Graphs" class="js-selected-navigation-item sunken-menu-item" data-pjax="true" data-selected-links="repo_graphs repo_contributors /stefangabos/Zebra_Datepicker/graphs">
          <span class="octicon octicon-graph"></span> <span class="full-word">Graphs</span>
          <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>

      <li class="tooltipped tooltipped-w" aria-label="Network">
        <a href="/stefangabos/Zebra_Datepicker/network" aria-label="Network" class="js-selected-navigation-item sunken-menu-item js-disable-pjax" data-selected-links="repo_network /stefangabos/Zebra_Datepicker/network">
          <span class="octicon octicon-git-branch"></span> <span class="full-word">Network</span>
          <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>
    </ul>


  </div>
</div>

              <div class="only-with-full-nav">
                

  

<div class="clone-url open"
  data-protocol-type="http"
  data-url="/users/set_protocol?protocol_selector=http&amp;protocol_type=clone">
  <h3><strong>HTTPS</strong> clone URL</h3>
  <div class="clone-url-box">
    <input type="text" class="clone js-url-field"
           value="https://github.com/stefangabos/Zebra_Datepicker.git" readonly="readonly">
    <span class="url-box-clippy">
    <button aria-label="copy to clipboard" class="js-zeroclipboard minibutton zeroclipboard-button" data-clipboard-text="https://github.com/stefangabos/Zebra_Datepicker.git" data-copied-hint="copied!" type="button"><span class="octicon octicon-clippy"></span></button>
    </span>
  </div>
</div>

  

<div class="clone-url "
  data-protocol-type="subversion"
  data-url="/users/set_protocol?protocol_selector=subversion&amp;protocol_type=clone">
  <h3><strong>Subversion</strong> checkout URL</h3>
  <div class="clone-url-box">
    <input type="text" class="clone js-url-field"
           value="https://github.com/stefangabos/Zebra_Datepicker" readonly="readonly">
    <span class="url-box-clippy">
    <button aria-label="copy to clipboard" class="js-zeroclipboard minibutton zeroclipboard-button" data-clipboard-text="https://github.com/stefangabos/Zebra_Datepicker" data-copied-hint="copied!" type="button"><span class="octicon octicon-clippy"></span></button>
    </span>
  </div>
</div>


<p class="clone-options">You can clone with
      <a href="#" class="js-clone-selector" data-protocol="http">HTTPS</a>
      or <a href="#" class="js-clone-selector" data-protocol="subversion">Subversion</a>.
  <span class="help tooltipped tooltipped-n" aria-label="Get help on which URL is right for you.">
    <a href="https://help.github.com/articles/which-remote-url-should-i-use">
    <span class="octicon octicon-question"></span>
    </a>
  </span>
</p>



                <a href="/stefangabos/Zebra_Datepicker/archive/master.zip"
                   class="minibutton sidebar-button"
                   aria-label="Download stefangabos/Zebra_Datepicker as a zip file"
                   title="Download stefangabos/Zebra_Datepicker as a zip file"
                   rel="nofollow">
                  <span class="octicon octicon-cloud-download"></span>
                  Download ZIP
                </a>
              </div>
        </div><!-- /.repository-sidebar -->

        <div id="js-repo-pjax-container" class="repository-content context-loader-container" data-pjax-container>
          


<a href="/stefangabos/Zebra_Datepicker/blob/895d026f31415cc3453a27db6bb1eac7c3999c1c/public/javascript/zebra_datepicker.js" class="hidden js-permalink-shortcut" data-hotkey="y">Permalink</a>

<!-- blob contrib key: blob_contributors:v21:b1549388f986249db28b2eb02be5063f -->

<p title="This is a placeholder element" class="js-history-link-replace hidden"></p>

<a href="/stefangabos/Zebra_Datepicker/find/master" data-pjax data-hotkey="t" class="js-show-file-finder" style="display:none">Show File Finder</a>

<div class="file-navigation">
  

<div class="select-menu js-menu-container js-select-menu" >
  <span class="minibutton select-menu-button js-menu-target" data-hotkey="w"
    data-master-branch="master"
    data-ref="master"
    role="button" aria-label="Switch branches or tags" tabindex="0" aria-haspopup="true">
    <span class="octicon octicon-git-branch"></span>
    <i>branch:</i>
    <span class="js-select-button">master</span>
  </span>

  <div class="select-menu-modal-holder js-menu-content js-navigation-container" data-pjax aria-hidden="true">

    <div class="select-menu-modal">
      <div class="select-menu-header">
        <span class="select-menu-title">Switch branches/tags</span>
        <span class="octicon octicon-remove-close js-menu-close"></span>
      </div> <!-- /.select-menu-header -->

      <div class="select-menu-filters">
        <div class="select-menu-text-filter">
          <input type="text" aria-label="Filter branches/tags" id="context-commitish-filter-field" class="js-filterable-field js-navigation-enable" placeholder="Filter branches/tags">
        </div>
        <div class="select-menu-tabs">
          <ul>
            <li class="select-menu-tab">
              <a href="#" data-tab-filter="branches" class="js-select-menu-tab">Branches</a>
            </li>
            <li class="select-menu-tab">
              <a href="#" data-tab-filter="tags" class="js-select-menu-tab">Tags</a>
            </li>
          </ul>
        </div><!-- /.select-menu-tabs -->
      </div><!-- /.select-menu-filters -->

      <div class="select-menu-list select-menu-tab-bucket js-select-menu-tab-bucket" data-tab-filter="branches">

        <div data-filterable-for="context-commitish-filter-field" data-filterable-type="substring">


            <div class="select-menu-item js-navigation-item selected">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/stefangabos/Zebra_Datepicker/blob/master/public/javascript/zebra_datepicker.js"
                 data-name="master"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="master">master</a>
            </div> <!-- /.select-menu-item -->
        </div>

          <div class="select-menu-no-results">Nothing to show</div>
      </div> <!-- /.select-menu-list -->

      <div class="select-menu-list select-menu-tab-bucket js-select-menu-tab-bucket" data-tab-filter="tags">
        <div data-filterable-for="context-commitish-filter-field" data-filterable-type="substring">


            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/stefangabos/Zebra_Datepicker/tree/v1.7.0/public/javascript/zebra_datepicker.js"
                 data-name="v1.7.0"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="v1.7.0">v1.7.0</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/stefangabos/Zebra_Datepicker/tree/1.8.8/public/javascript/zebra_datepicker.js"
                 data-name="1.8.8"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="1.8.8">1.8.8</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/stefangabos/Zebra_Datepicker/tree/1.8.7/public/javascript/zebra_datepicker.js"
                 data-name="1.8.7"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="1.8.7">1.8.7</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/stefangabos/Zebra_Datepicker/tree/1.8.6/public/javascript/zebra_datepicker.js"
                 data-name="1.8.6"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="1.8.6">1.8.6</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/stefangabos/Zebra_Datepicker/tree/1.8.5/public/javascript/zebra_datepicker.js"
                 data-name="1.8.5"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="1.8.5">1.8.5</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/stefangabos/Zebra_Datepicker/tree/1.8.4/public/javascript/zebra_datepicker.js"
                 data-name="1.8.4"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="1.8.4">1.8.4</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/stefangabos/Zebra_Datepicker/tree/1.8.3/public/javascript/zebra_datepicker.js"
                 data-name="1.8.3"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="1.8.3">1.8.3</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/stefangabos/Zebra_Datepicker/tree/1.8.2/public/javascript/zebra_datepicker.js"
                 data-name="1.8.2"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="1.8.2">1.8.2</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/stefangabos/Zebra_Datepicker/tree/1.8.0/public/javascript/zebra_datepicker.js"
                 data-name="1.8.0"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="1.8.0">1.8.0</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/stefangabos/Zebra_Datepicker/tree/1.7.7/public/javascript/zebra_datepicker.js"
                 data-name="1.7.7"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="1.7.7">1.7.7</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/stefangabos/Zebra_Datepicker/tree/1.7.6/public/javascript/zebra_datepicker.js"
                 data-name="1.7.6"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="1.7.6">1.7.6</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/stefangabos/Zebra_Datepicker/tree/1.7.5/public/javascript/zebra_datepicker.js"
                 data-name="1.7.5"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="1.7.5">1.7.5</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/stefangabos/Zebra_Datepicker/tree/1.7.3/public/javascript/zebra_datepicker.js"
                 data-name="1.7.3"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="1.7.3">1.7.3</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/stefangabos/Zebra_Datepicker/tree/1.7.1/public/javascript/zebra_datepicker.js"
                 data-name="1.7.1"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="1.7.1">1.7.1</a>
            </div> <!-- /.select-menu-item -->
            <div class="select-menu-item js-navigation-item ">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/stefangabos/Zebra_Datepicker/tree/1.7.0/public/javascript/zebra_datepicker.js"
                 data-name="1.7.0"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="1.7.0">1.7.0</a>
            </div> <!-- /.select-menu-item -->
        </div>

        <div class="select-menu-no-results">Nothing to show</div>
      </div> <!-- /.select-menu-list -->

    </div> <!-- /.select-menu-modal -->
  </div> <!-- /.select-menu-modal-holder -->
</div> <!-- /.select-menu -->

  <div class="breadcrumb">
    <span class='repo-root js-repo-root'><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/stefangabos/Zebra_Datepicker" data-branch="master" data-direction="back" data-pjax="true" itemscope="url"><span itemprop="title">Zebra_Datepicker</span></a></span></span><span class="separator"> / </span><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/stefangabos/Zebra_Datepicker/tree/master/public" data-branch="master" data-direction="back" data-pjax="true" itemscope="url"><span itemprop="title">public</span></a></span><span class="separator"> / </span><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/stefangabos/Zebra_Datepicker/tree/master/public/javascript" data-branch="master" data-direction="back" data-pjax="true" itemscope="url"><span itemprop="title">javascript</span></a></span><span class="separator"> / </span><strong class="final-path">zebra_datepicker.js</strong> <button aria-label="copy to clipboard" class="js-zeroclipboard minibutton zeroclipboard-button" data-clipboard-text="public/javascript/zebra_datepicker.js" data-copied-hint="copied!" type="button"><span class="octicon octicon-clippy"></span></button>
  </div>
</div>


  <div class="commit commit-loader file-history-tease js-deferred-content" data-url="/stefangabos/Zebra_Datepicker/contributors/master/public/javascript/zebra_datepicker.js">
    Fetching contributors…

    <div class="participation">
      <p class="loader-loading"><img alt="Octocat-spinner-32-eaf2f5" height="16" src="https://assets-cdn.github.com/images/spinners/octocat-spinner-32-EAF2F5.gif" width="16" /></p>
      <p class="loader-error">Cannot retrieve contributors at this time</p>
    </div>
  </div>

<div class="file-box">
  <div class="file">
    <div class="meta clearfix">
      <div class="info file-name">
        <span class="icon"><b class="octicon octicon-file-text"></b></span>
        <span class="mode" title="File Mode">file</span>
        <span class="meta-divider"></span>
          <span>1 lines (1 sloc)</span>
          <span class="meta-divider"></span>
        <span>23.479 kb</span>
      </div>
      <div class="actions">
        <div class="button-group">
              <a class="minibutton disabled tooltipped tooltipped-w" href="#"
                 aria-label="You must be signed in to make or propose changes">Edit</a>
          <a href="/stefangabos/Zebra_Datepicker/raw/master/public/javascript/zebra_datepicker.js" class="button minibutton " id="raw-url">Raw</a>
            <a href="/stefangabos/Zebra_Datepicker/blame/master/public/javascript/zebra_datepicker.js" class="button minibutton js-update-url-with-hash">Blame</a>
          <a href="/stefangabos/Zebra_Datepicker/commits/master/public/javascript/zebra_datepicker.js" class="button minibutton " rel="nofollow">History</a>
        </div><!-- /.button-group -->
          <a class="minibutton danger disabled empty-icon tooltipped tooltipped-w" href="#"
             aria-label="You must be signed in to make or propose changes">
          Delete
        </a>
      </div><!-- /.actions -->
    </div>
        <div class="blob-wrapper data type-javascript js-blob-data">
        <table class="file-code file-diff tab-size-8">
          <tr class="file-code-line">
            <td class="blob-line-nums">
              <span id="L1" rel="#L1">1</span>

            </td>
            <td class="blob-line-code"><div class="code-body highlight"><pre><div class='line' id='LC1'>!function(a){&quot;use strict&quot;;a.Zebra_DatePicker=function(b,c){var d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z,A,B,C,D,E,F,G,H,I,J,K,L,M,N={always_visible:!1,days:[&quot;Sunday&quot;,&quot;Monday&quot;,&quot;Tuesday&quot;,&quot;Wednesday&quot;,&quot;Thursday&quot;,&quot;Friday&quot;,&quot;Saturday&quot;],days_abbr:!1,direction:0,disabled_dates:!1,enabled_dates:!1,first_day_of_week:1,format:&quot;Y-m-d&quot;,header_captions:{days:&quot;F, Y&quot;,months:&quot;Y&quot;,years:&quot;Y1 - Y2&quot;},header_navigation:[&quot;&amp;#171;&quot;,&quot;&amp;#187;&quot;],inside:!0,lang_clear_date:&quot;Clear date&quot;,months:[&quot;January&quot;,&quot;February&quot;,&quot;March&quot;,&quot;April&quot;,&quot;May&quot;,&quot;June&quot;,&quot;July&quot;,&quot;August&quot;,&quot;September&quot;,&quot;October&quot;,&quot;November&quot;,&quot;December&quot;],months_abbr:!1,offset:[5,-5],pair:!1,readonly_element:!0,select_other_months:!1,show_clear_date:0,show_icon:!0,show_other_months:!0,show_select_today:&quot;Today&quot;,show_week_number:!1,start_date:!1,strict:!1,view:&quot;days&quot;,weekend_days:[0,6],zero_pad:!1,onChange:null,onClear:null,onSelect:null},O=this;O.settings={};var P=a(b),Q=function(b){if(!b){O.settings=a.extend({},N,c);for(var y in P.data())0===y.indexOf(&quot;zdp_&quot;)&amp;&amp;(y=y.replace(/^zdp\_/,&quot;&quot;),void 0!==N[y]&amp;&amp;(O.settings[y]=&quot;pair&quot;==y?a(P.data(&quot;zdp_&quot;+y)):P.data(&quot;zdp_&quot;+y)))}O.settings.readonly_element&amp;&amp;P.attr(&quot;readonly&quot;,&quot;readonly&quot;);var E={days:[&quot;d&quot;,&quot;j&quot;,&quot;D&quot;],months:[&quot;F&quot;,&quot;m&quot;,&quot;M&quot;,&quot;n&quot;,&quot;t&quot;],years:[&quot;o&quot;,&quot;Y&quot;,&quot;y&quot;]},F=!1,G=!1,Q=!1,T=null;for(T in E)a.each(E[T],function(a,b){O.settings.format.indexOf(b)&gt;-1&amp;&amp;(&quot;days&quot;==T?F=!0:&quot;months&quot;==T?G=!0:&quot;years&quot;==T&amp;&amp;(Q=!0))});H=F&amp;&amp;G&amp;&amp;Q?[&quot;years&quot;,&quot;months&quot;,&quot;days&quot;]:!F&amp;&amp;G&amp;&amp;Q?[&quot;years&quot;,&quot;months&quot;]:F||G||!Q?F||!G||Q?[&quot;years&quot;,&quot;months&quot;,&quot;days&quot;]:[&quot;months&quot;]:[&quot;years&quot;],-1==a.inArray(O.settings.view,H)&amp;&amp;(O.settings.view=H[H.length-1]),x=[],w=[];for(var U,V=0;2&gt;V;V++)U=0===V?O.settings.disabled_dates:O.settings.enabled_dates,a.isArray(U)&amp;&amp;U.length&gt;0&amp;&amp;a.each(U,function(){for(var b=this.split(&quot; &quot;),c=0;4&gt;c;c++){b[c]||(b[c]=&quot;*&quot;),b[c]=b[c].indexOf(&quot;,&quot;)&gt;-1?b[c].split(&quot;,&quot;):new Array(b[c]);for(var d=0;d&lt;b[c].length;d++)if(b[c][d].indexOf(&quot;-&quot;)&gt;-1){var e=b[c][d].match(/^([0-9]+)\-([0-9]+)/);if(null!==e){for(var f=eb(e[1]);f&lt;=eb(e[2]);f++)-1==a.inArray(f,b[c])&amp;&amp;b[c].push(f+&quot;&quot;);b[c].splice(d,1)}}for(d=0;d&lt;b[c].length;d++)b[c][d]=isNaN(eb(b[c][d]))?b[c][d]:eb(b[c][d])}0===V?x.push(b):w.push(b)});var W,X,Y=new Date,_=O.settings.reference_date?O.settings.reference_date:P.data(&quot;zdp_reference_date&quot;)&amp;&amp;void 0!==P.data(&quot;zdp_reference_date&quot;)?P.data(&quot;zdp_reference_date&quot;):Y;if(z=void 0,A=void 0,o=_.getMonth(),l=Y.getMonth(),p=_.getFullYear(),m=Y.getFullYear(),q=_.getDate(),n=Y.getDate(),O.settings.direction===!0)z=_;else if(O.settings.direction===!1)A=_,D=A.getMonth(),C=A.getFullYear(),B=A.getDate();else if(!a.isArray(O.settings.direction)&amp;&amp;$(O.settings.direction)&amp;&amp;eb(O.settings.direction)&gt;0||a.isArray(O.settings.direction)&amp;&amp;((W=R(O.settings.direction[0]))||O.settings.direction[0]===!0||$(O.settings.direction[0])&amp;&amp;O.settings.direction[0]&gt;0)&amp;&amp;((X=R(O.settings.direction[1]))||O.settings.direction[1]===!1||$(O.settings.direction[1])&amp;&amp;O.settings.direction[1]&gt;=0))z=W?W:new Date(p,o,q+(a.isArray(O.settings.direction)?eb(O.settings.direction[0]===!0?0:O.settings.direction[0]):eb(O.settings.direction))),o=z.getMonth(),p=z.getFullYear(),q=z.getDate(),X&amp;&amp;+X&gt;=+z?A=X:!X&amp;&amp;O.settings.direction[1]!==!1&amp;&amp;a.isArray(O.settings.direction)&amp;&amp;(A=new Date(p,o,q+eb(O.settings.direction[1]))),A&amp;&amp;(D=A.getMonth(),C=A.getFullYear(),B=A.getDate());else if(!a.isArray(O.settings.direction)&amp;&amp;$(O.settings.direction)&amp;&amp;eb(O.settings.direction)&lt;0||a.isArray(O.settings.direction)&amp;&amp;(O.settings.direction[0]===!1||$(O.settings.direction[0])&amp;&amp;O.settings.direction[0]&lt;0)&amp;&amp;((W=R(O.settings.direction[1]))||$(O.settings.direction[1])&amp;&amp;O.settings.direction[1]&gt;=0))A=new Date(p,o,q+(a.isArray(O.settings.direction)?eb(O.settings.direction[0]===!1?0:O.settings.direction[0]):eb(O.settings.direction))),D=A.getMonth(),C=A.getFullYear(),B=A.getDate(),W&amp;&amp;+A&gt;+W?z=W:!W&amp;&amp;a.isArray(O.settings.direction)&amp;&amp;(z=new Date(C,D,B-eb(O.settings.direction[1]))),z&amp;&amp;(o=z.getMonth(),p=z.getFullYear(),q=z.getDate());else if(a.isArray(O.settings.disabled_dates)&amp;&amp;O.settings.disabled_dates.length&gt;0)for(var cb in x)if(&quot;*&quot;==x[cb][0]&amp;&amp;&quot;*&quot;==x[cb][1]&amp;&amp;&quot;*&quot;==x[cb][2]&amp;&amp;&quot;*&quot;==x[cb][3]){var gb=[];if(a.each(w,function(){var a=this;&quot;*&quot;!=a[2][0]&amp;&amp;gb.push(parseInt(a[2][0]+(&quot;*&quot;==a[1][0]?&quot;12&quot;:db(a[1][0],2))+(&quot;*&quot;==a[0][0]?&quot;*&quot;==a[1][0]?&quot;31&quot;:new Date(a[2][0],a[1][0],0).getDate():db(a[0][0],2)),10))}),gb.sort(),gb.length&gt;0){var ib=(gb[0]+&quot;&quot;).match(/([0-9]{4})([0-9]{2})([0-9]{2})/);p=parseInt(ib[1],10),o=parseInt(ib[2],10)-1,q=parseInt(ib[3],10)}break}if(Z(p,o,q)){for(;Z(p);)z?(p++,o=0):(p--,o=11);for(;Z(p,o);)z?(o++,q=1):(o--,q=new Date(p,o+1,0).getDate()),o&gt;11?(p++,o=0,q=1):0&gt;o&amp;&amp;(p--,o=11,q=new Date(p,o+1,0).getDate());for(;Z(p,o,q);)z?q++:q--,Y=new Date(p,o,q),p=Y.getFullYear(),o=Y.getMonth(),q=Y.getDate();Y=new Date(p,o,q),p=Y.getFullYear(),o=Y.getMonth(),q=Y.getDate()}var jb=R(P.val()||(O.settings.start_date?O.settings.start_date:&quot;&quot;));if(jb&amp;&amp;O.settings.strict&amp;&amp;Z(jb.getFullYear(),jb.getMonth(),jb.getDate())&amp;&amp;P.val(&quot;&quot;),b||fb(z),!O.settings.always_visible){if(!b){if(O.settings.show_icon){&quot;firefox&quot;==hb.name&amp;&amp;P.is(&#39;input[type=&quot;text&quot;]&#39;)&amp;&amp;&quot;inline&quot;==P.css(&quot;display&quot;)&amp;&amp;P.css(&quot;display&quot;,&quot;inline-block&quot;);var kb=jQuery(&#39;&lt;span class=&quot;Zebra_DatePicker_Icon_Wrapper&quot;&gt;&lt;/span&gt;&#39;).css({display:P.css(&quot;display&quot;),position:&quot;static&quot;==P.css(&quot;position&quot;)?&quot;relative&quot;:P.css(&quot;position&quot;),&quot;float&quot;:P.css(&quot;float&quot;),top:P.css(&quot;top&quot;),right:P.css(&quot;right&quot;),bottom:P.css(&quot;bottom&quot;),left:P.css(&quot;left&quot;)});P.wrap(kb).css({position:&quot;relative&quot;,top:&quot;auto&quot;,right:&quot;auto&quot;,bottom:&quot;auto&quot;,left:&quot;auto&quot;}),f=jQuery(&#39;&lt;button type=&quot;button&quot; class=&quot;Zebra_DatePicker_Icon&#39;+(&quot;disabled&quot;==P.attr(&quot;disabled&quot;)?&quot; Zebra_DatePicker_Icon_Disabled&quot;:&quot;&quot;)+&#39;&quot;&gt;Pick a date&lt;/button&gt;&#39;),O.icon=f,I=f.add(P)}else I=P;I.bind(&quot;click&quot;,function(a){a.preventDefault(),P.attr(&quot;disabled&quot;)||(&quot;none&quot;!=e.css(&quot;display&quot;)?O.hide():O.show())}),void 0!==f&amp;&amp;f.insertAfter(P)}if(void 0!==f){f.attr(&quot;style&quot;,&quot;&quot;),O.settings.inside&amp;&amp;f.addClass(&quot;Zebra_DatePicker_Icon_Inside&quot;);var lb=P.outerWidth(),mb=P.outerHeight(),nb=parseInt(P.css(&quot;marginLeft&quot;),10)||0,ob=parseInt(P.css(&quot;marginTop&quot;),10)||0,pb=f.outerWidth(),qb=f.outerHeight(),rb=parseInt(f.css(&quot;marginLeft&quot;),10)||0,sb=parseInt(f.css(&quot;marginRight&quot;),10)||0;O.settings.inside?f.css({top:ob+(mb-qb)/2,left:nb+(lb-pb-sb)}):f.css({top:ob+(mb-qb)/2,left:nb+lb+rb})}}if(L=O.settings.show_select_today!==!1&amp;&amp;a.inArray(&quot;days&quot;,H)&gt;-1&amp;&amp;!Z(m,l,n)?O.settings.show_select_today:!1,!b){a(window).bind(&quot;resize.Zebra_DatePicker&quot;,function(){O.hide(),void 0!==f&amp;&amp;(clearTimeout(M),M=setTimeout(function(){O.update()},100))});var tb=&#39;&lt;div class=&quot;Zebra_DatePicker&quot;&gt;&lt;table class=&quot;dp_header&quot;&gt;&lt;tr&gt;&lt;td class=&quot;dp_previous&quot;&gt;&#39;+O.settings.header_navigation[0]+&#39;&lt;/td&gt;&lt;td class=&quot;dp_caption&quot;&gt;&amp;#032;&lt;/td&gt;&lt;td class=&quot;dp_next&quot;&gt;&#39;+O.settings.header_navigation[1]+&#39;&lt;/td&gt;&lt;/tr&gt;&lt;/table&gt;&lt;table class=&quot;dp_daypicker&quot;&gt;&lt;/table&gt;&lt;table class=&quot;dp_monthpicker&quot;&gt;&lt;/table&gt;&lt;table class=&quot;dp_yearpicker&quot;&gt;&lt;/table&gt;&lt;table class=&quot;dp_footer&quot;&gt;&lt;tr&gt;&lt;td class=&quot;dp_today&quot;&#39;+(O.settings.show_clear_date!==!1?&#39; style=&quot;width:50%&quot;&#39;:&quot;&quot;)+&quot;&gt;&quot;+L+&#39;&lt;/td&gt;&lt;td class=&quot;dp_clear&quot;&#39;+(L!==!1?&#39; style=&quot;width:50%&quot;&#39;:&quot;&quot;)+&quot;&gt;&quot;+O.settings.lang_clear_date+&quot;&lt;/td&gt;&lt;/tr&gt;&lt;/table&gt;&lt;/div&gt;&quot;;e=a(tb),O.datepicker=e,g=a(&quot;table.dp_header&quot;,e),h=a(&quot;table.dp_daypicker&quot;,e),i=a(&quot;table.dp_monthpicker&quot;,e),j=a(&quot;table.dp_yearpicker&quot;,e),K=a(&quot;table.dp_footer&quot;,e),J=a(&quot;td.dp_today&quot;,K),k=a(&quot;td.dp_clear&quot;,K),O.settings.always_visible?P.attr(&quot;disabled&quot;)||(O.settings.always_visible.append(e),O.show()):a(&quot;body&quot;).append(e),e.delegate(&quot;td:not(.dp_disabled, .dp_weekend_disabled, .dp_not_in_month, .dp_blocked, .dp_week_number)&quot;,&quot;mouseover&quot;,function(){a(this).addClass(&quot;dp_hover&quot;)}).delegate(&quot;td:not(.dp_disabled, .dp_weekend_disabled, .dp_not_in_month, .dp_blocked, .dp_week_number)&quot;,&quot;mouseout&quot;,function(){a(this).removeClass(&quot;dp_hover&quot;)}),S(a(&quot;td&quot;,g)),a(&quot;.dp_previous&quot;,g).bind(&quot;click&quot;,function(){a(this).hasClass(&quot;dp_blocked&quot;)||(&quot;months&quot;==d?s--:&quot;years&quot;==d?s-=12:--r&lt;0&amp;&amp;(r=11,s--),ab())}),a(&quot;.dp_caption&quot;,g).bind(&quot;click&quot;,function(){d=&quot;days&quot;==d?a.inArray(&quot;months&quot;,H)&gt;-1?&quot;months&quot;:a.inArray(&quot;years&quot;,H)&gt;-1?&quot;years&quot;:&quot;days&quot;:&quot;months&quot;==d?a.inArray(&quot;years&quot;,H)&gt;-1?&quot;years&quot;:a.inArray(&quot;days&quot;,H)&gt;-1?&quot;days&quot;:&quot;months&quot;:a.inArray(&quot;days&quot;,H)&gt;-1?&quot;days&quot;:a.inArray(&quot;months&quot;,H)&gt;-1?&quot;months&quot;:&quot;years&quot;,ab()}),a(&quot;.dp_next&quot;,g).bind(&quot;click&quot;,function(){a(this).hasClass(&quot;dp_blocked&quot;)||(&quot;months&quot;==d?s++:&quot;years&quot;==d?s+=12:12==++r&amp;&amp;(r=0,s++),ab())}),h.delegate(&quot;td:not(.dp_disabled, .dp_weekend_disabled, .dp_not_in_month, .dp_week_number)&quot;,&quot;click&quot;,function(){O.settings.select_other_months&amp;&amp;null!==(ib=a(this).attr(&quot;class&quot;).match(/date\_([0-9]{4})(0[1-9]|1[012])(0[1-9]|[12][0-9]|3[01])/))?bb(ib[1],ib[2]-1,ib[3],&quot;days&quot;,a(this)):bb(s,r,eb(a(this).html()),&quot;days&quot;,a(this))}),i.delegate(&quot;td:not(.dp_disabled)&quot;,&quot;click&quot;,function(){var b=a(this).attr(&quot;class&quot;).match(/dp\_month\_([0-9]+)/);r=eb(b[1]),-1==a.inArray(&quot;days&quot;,H)?bb(s,r,1,&quot;months&quot;,a(this)):(d=&quot;days&quot;,O.settings.always_visible&amp;&amp;P.val(&quot;&quot;),ab())}),j.delegate(&quot;td:not(.dp_disabled)&quot;,&quot;click&quot;,function(){s=eb(a(this).html()),-1==a.inArray(&quot;months&quot;,H)?bb(s,1,1,&quot;years&quot;,a(this)):(d=&quot;months&quot;,O.settings.always_visible&amp;&amp;P.val(&quot;&quot;),ab())}),a(J).bind(&quot;click&quot;,function(b){b.preventDefault(),bb(m,l,n,&quot;days&quot;,a(&quot;.dp_current&quot;,h)),O.settings.always_visible&amp;&amp;O.show(),O.hide()}),a(k).bind(&quot;click&quot;,function(b){b.preventDefault(),P.val(&quot;&quot;),O.settings.always_visible?(t=null,u=null,v=null,a(&quot;td.dp_selected&quot;,e).removeClass(&quot;dp_selected&quot;)):(t=null,u=null,v=null,r=null,s=null),O.hide(),O.settings.onClear&amp;&amp;&quot;function&quot;==typeof O.settings.onClear&amp;&amp;O.settings.onClear.call(P,P)}),O.settings.always_visible||a(document).bind({&quot;mousedown.Zebra_DatePicker&quot;:function(b){if(&quot;block&quot;==e.css(&quot;display&quot;)){if(O.settings.show_icon&amp;&amp;a(b.target).get(0)===f.get(0))return!0;0===a(b.target).parents().filter(&quot;.Zebra_DatePicker&quot;).length&amp;&amp;O.hide()}},&quot;keyup.Zebra_DatePicker&quot;:function(a){&quot;block&quot;==e.css(&quot;display&quot;)&amp;&amp;27==a.which&amp;&amp;O.hide()}}),ab()}};O.destroy=function(){void 0!==O.icon&amp;&amp;O.icon.remove(),O.datepicker.remove(),a(document).unbind(&quot;keyup.Zebra_DatePicker&quot;),a(document).unbind(&quot;mousedown.Zebra_DatePicker&quot;),a(window).unbind(&quot;resize.Zebra_DatePicker&quot;),P.removeData(&quot;Zebra_DatePicker&quot;)},O.hide=function(){O.settings.always_visible||(Y(&quot;hide&quot;),e.hide())},O.show=function(){d=O.settings.view;var b=R(P.val()||(O.settings.start_date?O.settings.start_date:&quot;&quot;));if(b?(u=b.getMonth(),r=b.getMonth(),v=b.getFullYear(),s=b.getFullYear(),t=b.getDate(),Z(v,u,t)&amp;&amp;(O.settings.strict&amp;&amp;P.val(&quot;&quot;),r=o,s=p)):(r=o,s=p),ab(),O.settings.always_visible)e.show();else{var c=e.outerWidth(),g=e.outerHeight(),h=(void 0!==f?f.offset().left+f.outerWidth(!0):P.offset().left+P.outerWidth(!0))+O.settings.offset[0],i=(void 0!==f?f.offset().top:P.offset().top)-g+O.settings.offset[1],j=a(window).width(),k=a(window).height(),l=a(window).scrollTop(),m=a(window).scrollLeft();h+c&gt;m+j&amp;&amp;(h=m+j-c),m&gt;h&amp;&amp;(h=m),i+g&gt;l+k&amp;&amp;(i=l+k-g),l&gt;i&amp;&amp;(i=l),e.css({left:h,top:i}),e.fadeIn(&quot;explorer&quot;==hb.name&amp;&amp;hb.version&lt;9?0:150,&quot;linear&quot;),Y()}},O.update=function(b){O.original_direction&amp;&amp;(O.original_direction=O.direction),O.settings=a.extend(O.settings,b),Q(!0)};var R=function(b){if(b+=&quot;&quot;,&quot;&quot;!==a.trim(b)){for(var c=T(O.settings.format),d=[&quot;d&quot;,&quot;D&quot;,&quot;j&quot;,&quot;l&quot;,&quot;N&quot;,&quot;S&quot;,&quot;w&quot;,&quot;F&quot;,&quot;m&quot;,&quot;M&quot;,&quot;n&quot;,&quot;Y&quot;,&quot;y&quot;],e=[],f=[],g=null,h=null,i=0;i&lt;d.length;i++)(g=c.indexOf(d[i]))&gt;-1&amp;&amp;e.push({character:d[i],position:g});if(e.sort(function(a,b){return a.position-b.position}),a.each(e,function(a,b){switch(b.character){case&quot;d&quot;:f.push(&quot;0[1-9]|[12][0-9]|3[01]&quot;);break;case&quot;D&quot;:f.push(&quot;[a-z]{3}&quot;);break;case&quot;j&quot;:f.push(&quot;[1-9]|[12][0-9]|3[01]&quot;);break;case&quot;l&quot;:f.push(&quot;[a-z]+&quot;);break;case&quot;N&quot;:f.push(&quot;[1-7]&quot;);break;case&quot;S&quot;:f.push(&quot;st|nd|rd|th&quot;);break;case&quot;w&quot;:f.push(&quot;[0-6]&quot;);break;case&quot;F&quot;:f.push(&quot;[a-z]+&quot;);break;case&quot;m&quot;:f.push(&quot;0[1-9]|1[012]+&quot;);break;case&quot;M&quot;:f.push(&quot;[a-z]{3}&quot;);break;case&quot;n&quot;:f.push(&quot;[1-9]|1[012]&quot;);break;case&quot;Y&quot;:f.push(&quot;[0-9]{4}&quot;);break;case&quot;y&quot;:f.push(&quot;[0-9]{2}&quot;)}}),f.length&amp;&amp;(e.reverse(),a.each(e,function(a,b){c=c.replace(b.character,&quot;(&quot;+f[f.length-a-1]+&quot;)&quot;)}),f=new RegExp(&quot;^&quot;+c+&quot;$&quot;,&quot;ig&quot;),h=f.exec(b))){var j,k=new Date,l=k.getDate(),m=k.getMonth()+1,n=k.getFullYear(),o=[&quot;Sunday&quot;,&quot;Monday&quot;,&quot;Tuesday&quot;,&quot;Wednesday&quot;,&quot;Thursday&quot;,&quot;Friday&quot;,&quot;Saturday&quot;],p=[&quot;January&quot;,&quot;February&quot;,&quot;March&quot;,&quot;April&quot;,&quot;May&quot;,&quot;June&quot;,&quot;July&quot;,&quot;August&quot;,&quot;September&quot;,&quot;October&quot;,&quot;November&quot;,&quot;December&quot;],q=!0;if(e.reverse(),a.each(e,function(b,c){if(!q)return!0;switch(c.character){case&quot;m&quot;:case&quot;n&quot;:m=eb(h[b+1]);break;case&quot;d&quot;:case&quot;j&quot;:l=eb(h[b+1]);break;case&quot;D&quot;:case&quot;l&quot;:case&quot;F&quot;:case&quot;M&quot;:j=&quot;D&quot;==c.character||&quot;l&quot;==c.character?O.settings.days:O.settings.months,q=!1,a.each(j,function(a,d){if(q)return!0;if(h[b+1].toLowerCase()==d.substring(0,&quot;D&quot;==c.character||&quot;M&quot;==c.character?3:d.length).toLowerCase()){switch(c.character){case&quot;D&quot;:h[b+1]=o[a].substring(0,3);break;case&quot;l&quot;:h[b+1]=o[a];break;case&quot;F&quot;:h[b+1]=p[a],m=a+1;break;case&quot;M&quot;:h[b+1]=p[a].substring(0,3),m=a+1}q=!0}});break;case&quot;Y&quot;:n=eb(h[b+1]);break;case&quot;y&quot;:n=&quot;19&quot;+eb(h[b+1])}}),q){var r=new Date(n,(m||1)-1,l||1);if(r.getFullYear()==n&amp;&amp;r.getDate()==(l||1)&amp;&amp;r.getMonth()==(m||1)-1)return r}}return!1}},S=function(a){&quot;firefox&quot;==hb.name?a.css(&quot;MozUserSelect&quot;,&quot;none&quot;):&quot;explorer&quot;==hb.name?a.bind(&quot;selectstart&quot;,function(){return!1}):a.mousedown(function(){return!1})},T=function(a){return a.replace(/([-.,*+?^${}()|[\]\/\\])/g,&quot;\\$1&quot;)},U=function(b){for(var c=&quot;&quot;,d=b.getDate(),e=b.getDay(),f=O.settings.days[e],g=b.getMonth()+1,h=O.settings.months[g-1],i=b.getFullYear()+&quot;&quot;,j=0;j&lt;O.settings.format.length;j++){var k=O.settings.format.charAt(j);switch(k){case&quot;y&quot;:i=i.substr(2);case&quot;Y&quot;:c+=i;break;case&quot;m&quot;:g=db(g,2);case&quot;n&quot;:c+=g;break;case&quot;M&quot;:h=a.isArray(O.settings.months_abbr)&amp;&amp;void 0!==O.settings.months_abbr[g-1]?O.settings.months_abbr[g-1]:O.settings.months[g-1].substr(0,3);case&quot;F&quot;:c+=h;break;case&quot;d&quot;:d=db(d,2);case&quot;j&quot;:c+=d;break;case&quot;D&quot;:f=a.isArray(O.settings.days_abbr)&amp;&amp;void 0!==O.settings.days_abbr[e]?O.settings.days_abbr[e]:O.settings.days[e].substr(0,3);case&quot;l&quot;:c+=f;break;case&quot;N&quot;:e++;case&quot;w&quot;:c+=e;break;case&quot;S&quot;:c+=d%10==1&amp;&amp;&quot;11&quot;!=d?&quot;st&quot;:d%10==2&amp;&amp;&quot;12&quot;!=d?&quot;nd&quot;:d%10==3&amp;&amp;&quot;13&quot;!=d?&quot;rd&quot;:&quot;th&quot;;break;default:c+=k}}return c},V=function(){var b=new Date(s,r+1,0).getDate(),c=new Date(s,r,1).getDay(),d=new Date(s,r,0).getDate(),e=c-O.settings.first_day_of_week;e=0&gt;e?7+e:e,_(O.settings.header_captions.days);var f=&quot;&lt;tr&gt;&quot;;O.settings.show_week_number&amp;&amp;(f+=&quot;&lt;th&gt;&quot;+O.settings.show_week_number+&quot;&lt;/th&gt;&quot;);for(var g=0;7&gt;g;g++)f+=&quot;&lt;th&gt;&quot;+(a.isArray(O.settings.days_abbr)&amp;&amp;void 0!==O.settings.days_abbr[(O.settings.first_day_of_week+g)%7]?O.settings.days_abbr[(O.settings.first_day_of_week+g)%7]:O.settings.days[(O.settings.first_day_of_week+g)%7].substr(0,2))+&quot;&lt;/th&gt;&quot;;for(f+=&quot;&lt;/tr&gt;&lt;tr&gt;&quot;,g=0;42&gt;g;g++){g&gt;0&amp;&amp;g%7===0&amp;&amp;(f+=&quot;&lt;/tr&gt;&lt;tr&gt;&quot;),g%7===0&amp;&amp;O.settings.show_week_number&amp;&amp;(f+=&#39;&lt;td class=&quot;dp_week_number&quot;&gt;&#39;+gb(new Date(s,r,g-e+1))+&quot;&lt;/td&gt;&quot;);var i=g-e+1;if(O.settings.select_other_months&amp;&amp;(e&gt;g||i&gt;b)){var j=new Date(s,r,i),k=j.getFullYear(),o=j.getMonth(),p=j.getDate();j=k+db(o+1,2)+db(p,2)}if(e&gt;g)f+=&#39;&lt;td class=&quot;&#39;+(O.settings.select_other_months&amp;&amp;!Z(k,o,p)?&quot;dp_not_in_month_selectable date_&quot;+j:&quot;dp_not_in_month&quot;)+&#39;&quot;&gt;&#39;+(O.settings.select_other_months||O.settings.show_other_months?db(d-e+g+1,O.settings.zero_pad?2:0):&quot;&amp;nbsp;&quot;)+&quot;&lt;/td&gt;&quot;;else if(i&gt;b)f+=&#39;&lt;td class=&quot;&#39;+(O.settings.select_other_months&amp;&amp;!Z(k,o,p)?&quot;dp_not_in_month_selectable date_&quot;+j:&quot;dp_not_in_month&quot;)+&#39;&quot;&gt;&#39;+(O.settings.select_other_months||O.settings.show_other_months?db(i-b,O.settings.zero_pad?2:0):&quot;&amp;nbsp;&quot;)+&quot;&lt;/td&gt;&quot;;else{var q=(O.settings.first_day_of_week+g)%7,w=&quot;&quot;;Z(s,r,i)?(a.inArray(q,O.settings.weekend_days)&gt;-1?w=&quot;dp_weekend_disabled&quot;:w+=&quot; dp_disabled&quot;,r==l&amp;&amp;s==m&amp;&amp;n==i&amp;&amp;(w+=&quot; dp_disabled_current&quot;)):(a.inArray(q,O.settings.weekend_days)&gt;-1&amp;&amp;(w=&quot;dp_weekend&quot;),r==u&amp;&amp;s==v&amp;&amp;t==i&amp;&amp;(w+=&quot; dp_selected&quot;),r==l&amp;&amp;s==m&amp;&amp;n==i&amp;&amp;(w+=&quot; dp_current&quot;)),f+=&quot;&lt;td&quot;+(&quot;&quot;!==w?&#39; class=&quot;&#39;+a.trim(w)+&#39;&quot;&#39;:&quot;&quot;)+&quot;&gt;&quot;+(O.settings.zero_pad?db(i,2):i)+&quot;&lt;/td&gt;&quot;}}f+=&quot;&lt;/tr&gt;&quot;,h.html(a(f)),O.settings.always_visible&amp;&amp;(E=a(&quot;td:not(.dp_disabled, .dp_weekend_disabled, .dp_not_in_month, .dp_blocked, .dp_week_number)&quot;,h)),h.show()},W=function(){_(O.settings.header_captions.months);for(var b=&quot;&lt;tr&gt;&quot;,c=0;12&gt;c;c++){c&gt;0&amp;&amp;c%3===0&amp;&amp;(b+=&quot;&lt;/tr&gt;&lt;tr&gt;&quot;);var d=&quot;dp_month_&quot;+c;Z(s,c)?d+=&quot; dp_disabled&quot;:u!==!1&amp;&amp;u==c&amp;&amp;s==v?d+=&quot; dp_selected&quot;:l==c&amp;&amp;m==s&amp;&amp;(d+=&quot; dp_current&quot;),b+=&#39;&lt;td class=&quot;&#39;+a.trim(d)+&#39;&quot;&gt;&#39;+(a.isArray(O.settings.months_abbr)&amp;&amp;void 0!==O.settings.months_abbr[c]?O.settings.months_abbr[c]:O.settings.months[c].substr(0,3))+&quot;&lt;/td&gt;&quot;}b+=&quot;&lt;/tr&gt;&quot;,i.html(a(b)),O.settings.always_visible&amp;&amp;(F=a(&quot;td:not(.dp_disabled)&quot;,i)),i.show()},X=function(){_(O.settings.header_captions.years);for(var b=&quot;&lt;tr&gt;&quot;,c=0;12&gt;c;c++){c&gt;0&amp;&amp;c%3===0&amp;&amp;(b+=&quot;&lt;/tr&gt;&lt;tr&gt;&quot;);var d=&quot;&quot;;Z(s-7+c)?d+=&quot; dp_disabled&quot;:v&amp;&amp;v==s-7+c?d+=&quot; dp_selected&quot;:m==s-7+c&amp;&amp;(d+=&quot; dp_current&quot;),b+=&quot;&lt;td&quot;+(&quot;&quot;!==a.trim(d)?&#39; class=&quot;&#39;+a.trim(d)+&#39;&quot;&#39;:&quot;&quot;)+&quot;&gt;&quot;+(s-7+c)+&quot;&lt;/td&gt;&quot;}b+=&quot;&lt;/tr&gt;&quot;,j.html(a(b)),O.settings.always_visible&amp;&amp;(G=a(&quot;td:not(.dp_disabled)&quot;,j)),j.show()},Y=function(b){if(&quot;explorer&quot;==hb.name&amp;&amp;6==hb.version){if(!y){var c=eb(e.css(&quot;zIndex&quot;))-1;y=jQuery(&quot;&lt;iframe&gt;&quot;,{src:&#39;javascript:document.write(&quot;&quot;)&#39;,scrolling:&quot;no&quot;,frameborder:0,css:{zIndex:c,position:&quot;absolute&quot;,top:-1e3,left:-1e3,width:e.outerWidth(),height:e.outerHeight(),filter:&quot;progid:DXImageTransform.Microsoft.Alpha(opacity=0)&quot;,display:&quot;none&quot;}}),a(&quot;body&quot;).append(y)}switch(b){case&quot;hide&quot;:y.hide();break;default:var d=e.offset();y.css({top:d.top,left:d.left,display:&quot;block&quot;})}}},Z=function(b,c,d){if((void 0===b||isNaN(b))&amp;&amp;(void 0===c||isNaN(c))&amp;&amp;(void 0===d||isNaN(d)))return!1;if(a.isArray(O.settings.direction)||0!==eb(O.settings.direction)){var e=eb(cb(b,&quot;undefined&quot;!=typeof c?db(c,2):&quot;&quot;,&quot;undefined&quot;!=typeof d?db(d,2):&quot;&quot;)),f=(e+&quot;&quot;).length;if(8==f&amp;&amp;(&quot;undefined&quot;!=typeof z&amp;&amp;e&lt;eb(cb(p,db(o,2),db(q,2)))||&quot;undefined&quot;!=typeof A&amp;&amp;e&gt;eb(cb(C,db(D,2),db(B,2)))))return!0;if(6==f&amp;&amp;(&quot;undefined&quot;!=typeof z&amp;&amp;e&lt;eb(cb(p,db(o,2)))||&quot;undefined&quot;!=typeof A&amp;&amp;e&gt;eb(cb(C,db(D,2)))))return!0;if(4==f&amp;&amp;(&quot;undefined&quot;!=typeof z&amp;&amp;p&gt;e||&quot;undefined&quot;!=typeof A&amp;&amp;e&gt;C))return!0}&quot;undefined&quot;!=typeof c&amp;&amp;(c+=1);var g=!1,h=!1;return x&amp;&amp;a.each(x,function(){if(!g){var e=this;if((a.inArray(b,e[2])&gt;-1||a.inArray(&quot;*&quot;,e[2])&gt;-1)&amp;&amp;(&quot;undefined&quot;!=typeof c&amp;&amp;a.inArray(c,e[1])&gt;-1||a.inArray(&quot;*&quot;,e[1])&gt;-1)&amp;&amp;(&quot;undefined&quot;!=typeof d&amp;&amp;a.inArray(d,e[0])&gt;-1||a.inArray(&quot;*&quot;,e[0])&gt;-1)){if(&quot;*&quot;==e[3])return g=!0;var f=new Date(b,c-1,d).getDay();if(a.inArray(f,e[3])&gt;-1)return g=!0}}}),w&amp;&amp;a.each(w,function(){if(!h){var e=this;if((a.inArray(b,e[2])&gt;-1||a.inArray(&quot;*&quot;,e[2])&gt;-1)&amp;&amp;(h=!0,&quot;undefined&quot;!=typeof c))if(h=!0,a.inArray(c,e[1])&gt;-1||a.inArray(&quot;*&quot;,e[1])&gt;-1){if(&quot;undefined&quot;!=typeof d)if(h=!0,a.inArray(d,e[0])&gt;-1||a.inArray(&quot;*&quot;,e[0])&gt;-1){if(&quot;*&quot;==e[3])return h=!0;var f=new Date(b,c-1,d).getDay();if(a.inArray(f,e[3])&gt;-1)return h=!0;h=!1}else h=!1}else h=!1}}),w&amp;&amp;h?!1:x&amp;&amp;g?!0:!1},$=function(a){return(a+&quot;&quot;).match(/^\-?[0-9]+$/)?!0:!1},_=function(b){if(a.isNumeric(r)&amp;&amp;(b=b.replace(/\bm\b|\bn\b|\bF\b|\bM\b/,function(b){switch(b){case&quot;m&quot;:return db(r+1,2);case&quot;n&quot;:return r+1;case&quot;F&quot;:return O.settings.months[r];case&quot;M&quot;:return a.isArray(O.settings.months_abbr)&amp;&amp;void 0!==O.settings.months_abbr[r]?O.settings.months_abbr[r]:O.settings.months[r].substr(0,3);default:return b}})),a.isNumeric(s)&amp;&amp;(b=b.replace(/\bY\b/,s).replace(/\by\b/,(s+&quot;&quot;).substr(2)).replace(/\bY1\b/i,s-7).replace(/\bY2\b/i,s+4)),a(&quot;.dp_caption&quot;,g).html(b),a.isArray(O.settings.direction)||0!==eb(O.settings.direction)||1==H.length&amp;&amp;&quot;months&quot;==H[0]){var c,e,f=s,h=r;&quot;days&quot;==d?(e=!Z(0&gt;h-1?cb(f-1,&quot;11&quot;):cb(f,db(h-1,2))),c=!Z(h+1&gt;11?cb(f+1,&quot;00&quot;):cb(f,db(h+1,2)))):&quot;months&quot;==d?((!z||z.getFullYear()&lt;=f-1)&amp;&amp;(e=!0),(!A||A.getFullYear()&gt;=f+1)&amp;&amp;(c=!0)):&quot;years&quot;==d&amp;&amp;((!z||z.getFullYear()&lt;f-7)&amp;&amp;(e=!0),(!A||A.getFullYear()&gt;f+4)&amp;&amp;(c=!0)),e?a(&quot;.dp_previous&quot;,g).removeClass(&quot;dp_blocked&quot;):(a(&quot;.dp_previous&quot;,g).addClass(&quot;dp_blocked&quot;),a(&quot;.dp_previous&quot;,g).removeClass(&quot;dp_hover&quot;)),c?a(&quot;.dp_next&quot;,g).removeClass(&quot;dp_blocked&quot;):(a(&quot;.dp_next&quot;,g).addClass(&quot;dp_blocked&quot;),a(&quot;.dp_next&quot;,g).removeClass(&quot;dp_hover&quot;))}},ab=function(){if(&quot;&quot;===h.text()||&quot;days&quot;==d){if(&quot;&quot;===h.text()){O.settings.always_visible||e.css(&quot;left&quot;,-1e3),e.show(),V();var b=h.outerWidth(),c=h.outerHeight();i.css({width:b,height:c}),j.css({width:b,height:c}),g.css(&quot;width&quot;,b),K.css(&quot;width&quot;,b),e.hide()}else V();i.hide(),j.hide()}else&quot;months&quot;==d?(W(),h.hide(),j.hide()):&quot;years&quot;==d&amp;&amp;(X(),h.hide(),i.hide());if(O.settings.onChange&amp;&amp;&quot;function&quot;==typeof O.settings.onChange&amp;&amp;void 0!==d){var f=&quot;days&quot;==d?h.find(&quot;td:not(.dp_disabled, .dp_weekend_disabled, .dp_not_in_month, .dp_blocked)&quot;):&quot;months&quot;==d?i.find(&quot;td:not(.dp_disabled, .dp_weekend_disabled, .dp_not_in_month, .dp_blocked)&quot;):j.find(&quot;td:not(.dp_disabled, .dp_weekend_disabled, .dp_not_in_month, .dp_blocked)&quot;);f.each(function(){if(&quot;days&quot;==d)if(a(this).hasClass(&quot;dp_not_in_month_selectable&quot;)){var b=a(this).attr(&quot;class&quot;).match(/date\_([0-9]{4})(0[1-9]|1[012])(0[1-9]|[12][0-9]|3[01])/);a(this).data(&quot;date&quot;,b[1]+&quot;-&quot;+b[2]+&quot;-&quot;+b[3])}else a(this).data(&quot;date&quot;,s+&quot;-&quot;+db(r+1,2)+&quot;-&quot;+db(eb(a(this).text()),2));else if(&quot;months&quot;==d){var b=a(this).attr(&quot;class&quot;).match(/dp\_month\_([0-9]+)/);a(this).data(&quot;date&quot;,s+&quot;-&quot;+db(eb(b[1])+1,2))}else a(this).data(&quot;date&quot;,eb(a(this).text()))}),O.settings.onChange.call(P,d,f,P)}K.show(),O.settings.show_clear_date===!0||0===O.settings.show_clear_date&amp;&amp;&quot;&quot;!==P.val()||O.settings.always_visible&amp;&amp;O.settings.show_clear_date!==!1?(k.show(),L?(J.css(&quot;width&quot;,&quot;50%&quot;),k.css(&quot;width&quot;,&quot;50%&quot;)):(J.hide(),k.css(&quot;width&quot;,&quot;100%&quot;))):(k.hide(),L?J.show().css(&quot;width&quot;,&quot;100%&quot;):K.hide())},bb=function(a,b,c,d,e){var f=new Date(a,b,c,12,0,0),g=&quot;days&quot;==d?E:&quot;months&quot;==d?F:G,h=U(f);P.val(h),O.settings.always_visible&amp;&amp;(u=f.getMonth(),r=f.getMonth(),v=f.getFullYear(),s=f.getFullYear(),t=f.getDate(),g.removeClass(&quot;dp_selected&quot;),e.addClass(&quot;dp_selected&quot;),&quot;days&quot;==d&amp;&amp;e.hasClass(&quot;dp_not_in_month_selectable&quot;)&amp;&amp;O.show()),O.hide(),fb(f),O.settings.onSelect&amp;&amp;&quot;function&quot;==typeof O.settings.onSelect&amp;&amp;O.settings.onSelect.call(P,h,a+&quot;-&quot;+db(b+1,2)+&quot;-&quot;+db(c,2),f,P,gb(f)),P.focus()},cb=function(){for(var a=&quot;&quot;,b=0;b&lt;arguments.length;b++)a+=arguments[b]+&quot;&quot;;return a},db=function(a,b){for(a+=&quot;&quot;;a.length&lt;b;)a=&quot;0&quot;+a;return a},eb=function(a){return parseInt(a,10)},fb=function(b){O.settings.pair&amp;&amp;a.each(O.settings.pair,function(){var c=a(this);if(c.data&amp;&amp;c.data(&quot;Zebra_DatePicker&quot;)){var d=c.data(&quot;Zebra_DatePicker&quot;);d.update({reference_date:b,direction:0===d.settings.direction?1:d.settings.direction}),d.settings.always_visible&amp;&amp;d.show()}else c.data(&quot;zdp_reference_date&quot;,b)})},gb=function(a){var b,c,d,e,f,g,h,i,j,k=a.getFullYear(),l=a.getMonth()+1,m=a.getDate();return 3&gt;l?(b=k-1,c=(b/4|0)-(b/100|0)+(b/400|0),d=((b-1)/4|0)-((b-1)/100|0)+((b-1)/400|0),e=c-d,f=0,g=m-1+31*(l-1)):(b=k,c=(b/4|0)-(b/100|0)+(b/400|0),d=((b-1)/4|0)-((b-1)/100|0)+((b-1)/400|0),e=c-d,f=e+1,g=m+((153*(l-3)+2)/5|0)+58+e),h=(b+c)%7,m=(g+h-f)%7,i=g+3-m,j=0&gt;i?53-((h-e)/5|0):i&gt;364+e?1:(i/7|0)+1},hb={init:function(){this.name=this.searchString(this.dataBrowser)||&quot;&quot;,this.version=this.searchVersion(navigator.userAgent)||this.searchVersion(navigator.appVersion)||&quot;&quot;},searchString:function(a){for(var b=0;b&lt;a.length;b++){var c=a[b].string,d=a[b].prop;if(this.versionSearchString=a[b].versionSearch||a[b].identity,c){if(-1!=c.indexOf(a[b].subString))return a[b].identity}else if(d)return a[b].identity}},searchVersion:function(a){var b=a.indexOf(this.versionSearchString);if(-1!=b)return parseFloat(a.substring(b+this.versionSearchString.length+1))},dataBrowser:[{string:navigator.userAgent,subString:&quot;Firefox&quot;,identity:&quot;firefox&quot;},{string:navigator.userAgent,subString:&quot;MSIE&quot;,identity:&quot;explorer&quot;,versionSearch:&quot;MSIE&quot;}]};hb.init(),Q()},a.fn.Zebra_DatePicker=function(b){return this.each(function(){void 0!==a(this).data(&quot;Zebra_DatePicker&quot;)&amp;&amp;a(this).data(&quot;Zebra_DatePicker&quot;).destroy();var c=new a.Zebra_DatePicker(this,b);a(this).data(&quot;Zebra_DatePicker&quot;,c)})}}(jQuery);</div></pre></div></td>
          </tr>
        </table>
  </div>

  </div>
</div>

<a href="#jump-to-line" rel="facebox[.linejump]" data-hotkey="l" class="js-jump-to-line" style="display:none">Jump to Line</a>
<div id="jump-to-line" style="display:none">
  <form accept-charset="UTF-8" class="js-jump-to-line-form">
    <input class="linejump-input js-jump-to-line-field" type="text" placeholder="Jump to line&hellip;" autofocus>
    <button type="submit" class="button">Go</button>
  </form>
</div>

        </div>

      </div><!-- /.repo-container -->
      <div class="modal-backdrop"></div>
    </div><!-- /.container -->
  </div><!-- /.site -->


    </div><!-- /.wrapper -->

      <div class="container">
  <div class="site-footer">
    <ul class="site-footer-links right">
      <li><a href="https://status.github.com/">Status</a></li>
      <li><a href="http://developer.github.com">API</a></li>
      <li><a href="http://training.github.com">Training</a></li>
      <li><a href="http://shop.github.com">Shop</a></li>
      <li><a href="/blog">Blog</a></li>
      <li><a href="/about">About</a></li>

    </ul>

    <a href="/">
      <span class="mega-octicon octicon-mark-github" title="GitHub"></span>
    </a>

    <ul class="site-footer-links">
      <li>&copy; 2014 <span title="0.03721s from github-fe129-cp1-prd.iad.github.net">GitHub</span>, Inc.</li>
        <li><a href="/site/terms">Terms</a></li>
        <li><a href="/site/privacy">Privacy</a></li>
        <li><a href="/security">Security</a></li>
        <li><a href="/contact">Contact</a></li>
    </ul>
  </div><!-- /.site-footer -->
</div><!-- /.container -->


    <div class="fullscreen-overlay js-fullscreen-overlay" id="fullscreen_overlay">
  <div class="fullscreen-container js-fullscreen-container">
    <div class="textarea-wrap">
      <textarea name="fullscreen-contents" id="fullscreen-contents" class="fullscreen-contents js-fullscreen-contents" placeholder="" data-suggester="fullscreen_suggester"></textarea>
    </div>
  </div>
  <div class="fullscreen-sidebar">
    <a href="#" class="exit-fullscreen js-exit-fullscreen tooltipped tooltipped-w" aria-label="Exit Zen Mode">
      <span class="mega-octicon octicon-screen-normal"></span>
    </a>
    <a href="#" class="theme-switcher js-theme-switcher tooltipped tooltipped-w"
      aria-label="Switch themes">
      <span class="octicon octicon-color-mode"></span>
    </a>
  </div>
</div>



    <div id="ajax-error-message" class="flash flash-error">
      <span class="octicon octicon-alert"></span>
      <a href="#" class="octicon octicon-remove-close close js-ajax-error-dismiss"></a>
      Something went wrong with that request. Please try again.
    </div>


      <script crossorigin="anonymous" src="https://assets-cdn.github.com/assets/frameworks-ab437d541e9c517df422126b73a5694a1d43ee9e.js" type="text/javascript"></script>
      <script async="async" crossorigin="anonymous" src="https://assets-cdn.github.com/assets/github-f8fc00b8934006933bc2391fd76f435ac85a7016.js" type="text/javascript"></script>
      
      
  </body>
</html>

