<?php
require_once '../src/HtmlEncryptor.class.php';

$html = new Html\Encryptor;
$html->Encrypt();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="robots" content="index, follow" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="https://github.com/picturepan2/spectre" />
    <title>Spectre.css: a lightweight, responsive and modern CSS framework</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/spectre.css/0.1.12/spectre.min.css" />
    <style>
        header > h4,
        header > h5 {
            padding-top: 4rem;
            margin-top: 4rem;
            margin-bottom: 2rem;
        }
        .bg-grey {
            background-color: #efefef;
            padding: 1rem;
            border-radius: .3rem;
        }
        .grid-hero {
            margin-top: 10rem;
            margin-bottom: 10rem;
        }
        .grid-hero h3 {
            margin-bottom: 5rem;
        }
        .grid-hero .notes {
            margin: 4rem 0;
        }
        .grid-footer {
            color: #888;
            margin-top: 4rem;
            margin-bottom: 4rem;
        }
        .grid-footer a {
            color: #666;
        }
        .notes {
            margin: 4rem 0;
            color: #666;
        }
        .code {
            color: #666;
        }
        .code .com {
            color: #adadad;
        }
        .code .tag {
            color: #4452c0;
        }
        .code .atn {
            color: #666;
        }
        .code .atv {
            color: #e06870;
        }
    </style>
</head>
<body>
    <section class="container bg-grey">
        <section id="overview" class="grid-hero grid-960">
            <header class="text-center"><h3>Spectre.css</h3></header>
            <section>
                <p><strong>Spectre.css</strong> is a lightweight, responsive and modern CSS framework for faster and extensible development.</p>
                <ul>
                    <li>lightweight and clean starting point for your project and prototype</li>
                    <li>flexbox, responsive and mobile-friendly layout</li>
                    <li>carefully designed elements</li>
                    <li>built in useful components and utilities</li>
                    <li>patterns and html templates <span class="label label-primary">soon</span></li>
                    <li>email templates <span class="label label-primary">soon</span></li>
                </ul>
            </section>
            <section class="notes text-center">
                <div class="btn-group">
                    <a href="https://github.com/picturepan2/spectre" target="_blank" class="btn btn-primary">GitHub Repo</a>
                    <a href="#getting-started" class="btn btn-primary">Documentation</a>
                </div>
            </section>
        </section>
    </section>
    <section class="container">
        <section id="getting-started" class="grid-960">
            <header class="text-center"><h4>getting started</h4></header>
            <section class="notes">
                <p>There are 3 ways to get started with Spectre CSS framework in your projects. You can either manually install or use NPM and Bower.</p>
                <h5>Install manually</h5>
                <p>Download the compiled and minified <a href="https://github.com/picturepan2/spectre/tree/master/dist" target="_blank">Spectre CSS file</a> (about 26KB):</p>
                <p><a href="https://github.com/picturepan2/spectre/tree/master/dist" target="_blank" class="btn btn-primary">Download Spectre.css</a></p>
                <h5>Install with NPM</h5>
                <!-- install with npm example -->
<pre class="code lang-html">
<span class="tag">$</span> npm install <span class="atv">spectre.css</span>
</pre>
                <h5>Install with Bower</h5>
                <!-- install with bower example -->
<pre class="code lang-html">
<span class="tag">$</span> bower install <span class="atv">spectre.css</span>
</pre>
                <p>And include it in your website or Web app <code class="label">&lt;head&gt;</code></p>
                <!-- install manually example -->
<pre class="code lang-html">
&lt;<span class="tag">link</span> <span class="atn">rel</span>=<span class="atv">&quot;stylesheet&quot;</span> <span class="atn">href</span>=<span class="atv">&quot;dist/spectre.min.css&quot;</span> /&gt;
</pre>

            </section>
        </section>

        <section id="compiling" class="grid-960">
            <header class="text-center"><h4>compiling custom version</h4></header>
            <section class="notes">
                <p>Spectre uses <a href="http://gulpjs.com/" target="_blank">Gulp</a> for compiling CSS. You can customize your version of Spectre.css by editing LESS files in <code class="label">/src</code> directory or removing unneeded components from <code class="label">spectre.less</code>.</p>
                <p>Then, you can build the CSS file from the command line:</p>
                <ol>
                    <li>Navigate to the root directory of Spectre where you can find <code class="label">package.json</code> file.</li>
                    <li>Run <code class="label">npm install</code>. NPM will install all dev dependencies as listed in package.json.</li>
                    <li>When completed, run <code class="label">gulp build</code> to compile LESS to CSS and minify files.</li>
                    <li>You can find compiled CSS files in <code class="label">/dist</code> directory.</li>
                </ol>
                <p>You can watch file changes and rebuild CSS files by using <code class="label">gulp watch</code>.</p>
            </section>
        </section>

        <section id="elements" class="grid-960">
            <section class="notes text-center">
                <ul class="tab inline-block">
                    <li class="tab-item active">
                        <a href="#elements">
                            elements
                        </a>
                    </li>
                    <li class="tab-item">
                        <a href="#components">
                            components
                        </a>
                    </li>
                    <li class="tab-item">
                        <a href="#utilities">
                            utilities
                        </a>
                    </li>
                </ul>
            </section>
            <section class="notes text-center">
                <div class="btn-group">
                    <a href="#typography" class="btn btn-primary">typography</a>
                    <a href="#layout" class="btn btn-primary">layout</a>
                    <a href="#tables" class="btn btn-primary">tables</a>
                    <a href="#buttons" class="btn btn-primary">buttons</a>
                    <a href="#forms" class="btn btn-primary">forms</a>
                    <a href="#media" class="btn btn-primary">media</a>
                </div>
            </section>
        </section>

        <section id="typography" class="grid-960">
            <header class="text-center"><h4>typography</h4></header>
            <section class="notes">
                <p><strong>Typography</strong> sets default styles for headings, paragraphs, blockquote, lists and code elements. </p>
            </section>

            <header class="text-center"><h5>headings</h5></header>
            <h1>H1 Title <small class="label">5rem</small></h1>
            <h2>H2 Title <small class="label">4rem</small></h2>
            <h3>H3 Title <small class="label">3rem</small></h3>
            <h4>H4 Title <small class="label">2.4rem</small></h4>
            <h5>H5 Title <small class="label">2rem</small></h5>
            <h6>H6 Title <small class="label">1.6rem</small></h6>

            <!-- headings example -->
<pre class="code lang-html">
&lt;<span class="tag">h1</span>&gt;H1 Title&lt;<span class="tag">/h1</span>&gt;
&lt;<span class="tag">h2</span>&gt;H2 Title &lt;<span class="tag">small</span> <span class="atn">class</span>=<span class="atv">&quot;label&quot;</span>&gt;4rem&lt;<span class="tag">/small</span>&gt;&lt;<span class="tag">/h2</span>&gt;
</pre>

            <header class="text-center"><h5>paragraphs</h5></header>
            <p>Lorem ipsum dolor sit amet, <span class="highlight">consectetur</span> adipiscing elit. Praesent risus leo, <a href="#typography">dictum in vehicula sit amet</a>, feugiat tempus tellus. Duis quis sodales risus. Etiam euismod ornare consequat.</p>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>

            <!-- headings example -->
<pre class="code lang-html">
&lt;<span class="tag">p</span>&gt;Lorem ipsum dolor sit amet, &lt;<span class="tag">span</span> <span class="atn">class</span>=<span class="atv">&quot;highlight&quot;</span>&gt;consectetur&lt;<span class="tag">/span</span>&gt; adipiscing elit. Praesent risus leo, &lt;<span class="tag">a</span> <span class="atn">href</span>=<span class="atv">&quot;#&quot;</span>&gt;dictum in vehicula sit amet&lt;<span class="tag">/a</span>&gt;, feugiat tempus tellus. Duis quis sodales risus. Etiam euismod ornare consequat.&lt;<span class="tag">/p</span>&gt;
&lt;<span class="tag">p</span> <span class="atn">class</span>=<span class="atv">&quot;lead&quot;</span>&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.&lt;<span class="tag">/p</span>&gt;
</pre>
            <header class="text-center"><h5>optimized for asian fonts</h5></header>
            <p class="lead">??, ?????, ?????</p>
            <h6>Chinese (Simplified)</h6>
            <p>????????,?????,??????,??????,??????,�????�,??�?????�???????,??????????????????</p>
            <h6>Japanese</h6>
            <p>????????????????????????????????????????????????????????????????????????????????????????????</p>
            <h6>Korean</h6>
            <p>???? ??? ??, ??�??? ?? ??? ?????, ???? ???? ???? ?? ?? ???, ?? ? ?? ?? ??? ??? ??. ?? ?? ??? ??, ?? ?? ?? ??? ???, ???? ??? ?? ??, ??? ?? ??? ??? ? ????.</p>

            <header class="text-center"><h5>blockquote</h5></header>
            <blockquote>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                <cite>- Source</cite>
            </blockquote>

            <!-- blockquote example -->
<pre class="code lang-html">
&lt;<span class="tag">blockquote</span>&gt;
    &lt;<span class="tag">p</span>&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.&lt;<span class="tag">/p</span>&gt;
    &lt;<span class="tag">cite</span>&gt;- Source&lt;<span class="tag">/cite</span>&gt;
&lt;<span class="tag">/blockquote</span>&gt;
</pre>

            <header class="text-center"><h5>lists</h5></header>
            <div class="columns">
                <div class="column col-6">
                    <ul class="list">
                        <li>list item 1</li>
                        <li>list item 2
                            <ul>
                                <li>list item 2.1</li>
                                <li>list item 2.2</li>
                                <li>list item 2.3</li>
                            </ul>
                        </li>
                        <li>list item 3</li>
                    </ul>
                </div>
                <div class="column col-6">
                    <ol class="list">
                        <li>list item 1</li>
                        <li>list item 2
                            <ol>
                                <li>list item 2.1</li>
                                <li>list item 2.2</li>
                                <li>list item 2.3</li>
                            </ol>
                        </li>
                        <li>list item 3</li>
                    </ol>
                </div>
            </div>

            <!-- lists example -->
<pre class="code lang-html">
&lt;<span class="tag">ul</span> <span class="atn">class</span>=<span class="atv">&quot;list&quot;</span>&gt;
    &lt;<span class="tag">li</span>&gt;list item 1&lt;<span class="tag">/li</span>&gt;
    &lt;<span class="tag">li</span>&gt;list item 2
        &lt;<span class="tag">ul</span>&gt;
            &lt;<span class="tag">li</span>&gt;list item 2.1&lt;<span class="tag">/li</span>&gt;
            &lt;<span class="tag">li</span>&gt;list item 2.2&lt;<span class="tag">/li</span>&gt;
            &lt;<span class="tag">li</span>&gt;list item 2.3&lt;<span class="tag">/li</span>&gt;
        &lt;<span class="tag">/ul</span>&gt;
    &lt;<span class="tag">/li</span>&gt;
    &lt;<span class="tag">li</span>&gt;list item 3&lt;<span class="tag">/li</span>&gt;
&lt;<span class="tag">/ul</span>&gt;
</pre>

        </section>

        <section id="layout" class="grid-960">
            <header class="text-center"><h4>flexbox layout</h4></header>
            <section class="notes">
                <p><strong>Layout</strong> includes flexbox based responsive grid system with 12 columns. </p>
            </section>
            <div class="columns">
                <div class="column">
                    <div class="bg-grey"></div>
                </div>
                <div class="column">
                    <div class="bg-grey"></div>
                </div>
                <div class="column">
                    <div class="bg-grey"></div>
                </div>
                <div class="column">
                    <div class="bg-grey"></div>
                </div>
                <div class="column">
                    <div class="bg-grey"></div>
                </div>
                <div class="column">
                    <div class="bg-grey"></div>
                </div>
                <div class="column">
                    <div class="bg-grey"></div>
                </div>
                <div class="column">
                    <div class="bg-grey"></div>
                </div>
                <div class="column">
                    <div class="bg-grey"></div>
                </div>
                <div class="column">
                    <div class="bg-grey"></div>
                </div>
                <div class="column">
                    <div class="bg-grey"></div>
                </div>
                <div class="column">
                    <div class="bg-grey"></div>
                </div>
            </div>
            <div class="columns">
                <div class="column col-6">
                    <div class="bg-grey">col-6</div>
                </div>
                <div class="column col-3">
                    <div class="bg-grey">col-3</div>
                </div>
                <div class="column col-2">
                    <div class="bg-grey">col-2</div>
                </div>
                <div class="column col-1">
                    <div class="bg-grey">col-1</div>
                </div>
            </div>
            <div class="columns">
                <div class="column col-12">
                    <div class="bg-grey">col-12 (100%)</div>
                </div>
            </div>
            <div class="columns">
                <div class="column col-9">
                    <div class="bg-grey">col-9 (75%)</div>
                </div>
            </div>
            <div class="columns">
                <div class="column col-6">
                    <div class="bg-grey">col-6 (50%)</div>
                </div>
            </div>
            <div class="columns">
                <div class="column col-3">
                    <div class="bg-grey">col-3 (25%)</div>
                </div>
            </div>
            <section class="notes">
                <p>Add the class <code class="label">columns</code> to a container. And add any element you want with classname <code class="label">column</code> inside the container. These columns will take up the space equally. You can specific the width of each column by adding class <code class="label">col-[1-12]</code>.</p>
            </section>
            <section class="notes">
                <p>When the width of browser viewport is less than 840px and more than 480px, the col-[1-11] will be 50% width to the parent elements.</p>
            </section>

            <!-- layout example -->
<pre class="code lang-html">
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">&quot;columns&quot;</span>&gt;
    &lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">&quot;column col-6&quot;</span>&gt;col-6&lt;<span class="tag">/div</span>&gt;
    &lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">&quot;column col-3&quot;</span>&gt;col-3&lt;<span class="tag">/div</span>&gt;
    &lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">&quot;column col-2&quot;</span>&gt;col-2&lt;<span class="tag">/div</span>&gt;
    &lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">&quot;column col-1&quot;</span>&gt;col-1&lt;<span class="tag">/div</span>&gt;
&lt;<span class="tag">/div</span>&gt;
</pre>

        </section>

        <section id="tables" class="grid-960">
            <header class="text-center"><h4>tables</h4></header>
            <section class="notes">
                <p><strong>Tables</strong> include default styles for tables and data sets.</p>
            </section>

            <table class="table">
                <thead>
                    <tr>
                        <th>name</th>
                        <th>duration</th>
                        <th>genre</th>
                        <th>release date</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="selected">
                        <td>The Shawshank Redemption</td>
                        <td>2h 22min</td>
                        <td>Crime, Drama</td>
                        <td>14 October 1994 <span class="label">USA</span></td>
                    </tr>
                    <tr>
                        <td>The Godfather</td>
                        <td>2h 55min</td>
                        <td>Crime, Drama</td>
                        <td>24 March 1972 <span class="label">USA</span></td>
                    </tr>
                    <tr>
                        <td>Schindler's List</td>
                        <td>3h 15min</td>
                        <td>Biography, Drama, History</td>
                        <td>4 February 1994 <span class="label">USA</span></td>
                    </tr>
                    <tr>
                        <td>Se7en</td>
                        <td>2h 7min</td>
                        <td>Crime, Drama, Mystery</td>
                        <td>24 March 1972 <span class="label">USA</span></td>
                    </tr>
                </tbody>
            </table>
            <section class="notes">
                <p>Add the class <code class="label">table</code> to any &lt;table&gt; element. The class will add padding, border and emphasized table header. Use the class <code class="label">selected</code> to make &lt;tr&gt; element highlighted. </p>
            </section>

            <!-- tables example -->
<pre class="code lang-html">
&lt;<span class="tag">table</span> <span class="atn">class</span>=<span class="atv">&quot;table&quot;</span>&gt;
    &lt;<span class="tag">thead</span>&gt;
        &lt;<span class="tag">tr</span>&gt;
            &lt;<span class="tag">th</span>&gt;name&lt;<span class="tag">/th</span>&gt;
            &lt;<span class="tag">th</span>&gt;duration&lt;<span class="tag">/th</span>&gt;
            &lt;<span class="tag">th</span>&gt;genre&lt;<span class="tag">/th</span>&gt;
            &lt;<span class="tag">th</span>&gt;release date&lt;<span class="tag">/th</span>&gt;
        &lt;<span class="tag">/tr</span>&gt;
    &lt;<span class="tag">/thead</span>&gt;
    &lt;<span class="tag">tbody</span>&gt;
        &lt;<span class="tag">tr</span> <span class="atn">class</span>=<span class="atv">&quot;selected&quot;</span>&gt;
            &lt;<span class="tag">th</span>&gt;The Shawshank Redemption&lt;<span class="tag">/th</span>&gt;
            &lt;<span class="tag">th</span>&gt;2h 22min&lt;<span class="tag">/th</span>&gt;
            &lt;<span class="tag">th</span>&gt;Crime, Drama&lt;<span class="tag">/th</span>&gt;
            &lt;<span class="tag">th</span>&gt;14 October 1994&lt;<span class="tag">/th</span>&gt;
        &lt;<span class="tag">/tr</span>&gt;
    &lt;<span class="tag">/tbody</span>&gt;
&lt;<span class="tag">/table</span>&gt;
</pre>

        </section>

        <section id="buttons" class="grid-960">
            <header class="text-center"><h4>buttons</h4></header>
            <section class="notes">
                <p><strong>Buttons</strong> include simple button styles for actions in different types and sizes. </p>
            </section>

            <div class="columns">
                <div class="column">
                    <button class="btn">default button</button>
                    <button class="btn loading">default button</button>
                </div>
                <div class="column">
                    <button class="btn btn-primary">primary button</button>
                    <button class="btn btn-primary loading">primary button</button>
                </div>
                <div class="column">
                    <button class="btn btn-link">link button</button>
                    <button class="btn btn-link loading">link button</button>
                </div>
            </div>
            <section class="notes">
                <p>Add the class <code class="label">btn</code> to &lt;a&gt;, &lt;input&gt; or &lt;button&gt; elements for a default button. There are classes <code class="label">btn-primary</code> and <code class="label">btn-link</code> for predefined primary and link buttons. A button with the class <code class="label">loading</code> can show loading indicator.  </p>
            </section>

            <!-- buttons example -->
<pre class="code lang-html">
&lt;<span class="tag">button</span> <span class="atn">class</span>=<span class="atv">&quot;btn&quot;</span>&gt;default button&lt;<span class="tag">/button</span>&gt;
&lt;<span class="tag">button</span> <span class="atn">class</span>=<span class="atv">&quot;btn btn-primary&quot;</span>&gt;primary button&lt;<span class="tag">/button</span>&gt;
&lt;<span class="tag">button</span> <span class="atn">class</span>=<span class="atv">&quot;btn btn-link&quot;</span>&gt;link button&lt;<span class="tag">/button</span>&gt;

<span class="com">&lt;!-- a button with loading state --&gt;</span>
&lt;<span class="tag">button</span> <span class="atn">class</span>=<span class="atv">&quot;btn loading&quot;</span>&gt;button&lt;<span class="tag">/button</span>&gt;
</pre>

            <header class="text-center"><h5>button sizes</h5></header>

            <div class="columns">
                <div class="column">
                    <button class="btn btn-lg">large button</button>
                    <button class="btn">normal button</button>
                    <button class="btn btn-sm">small button</button>
                </div>
                <div class="column">
                    <button class="btn btn-block">block button</button>
                </div>
            </div>
            <section class="notes">
                <p>Add the class <code class="label">btn-sm</code> or <code class="label">btn-lg</code> for small or large button size. Also, you can add the class <code class="label">btn-block</code> for a full-width button. </p>
            </section>

            <!-- buttons example -->
<pre class="code lang-html">
&lt;<span class="tag">button</span> <span class="atn">class</span>=<span class="atv">&quot;btn btn-lg&quot;</span>&gt;large button&lt;<span class="tag">/button</span>&gt;
&lt;<span class="tag">button</span> <span class="atn">class</span>=<span class="atv">&quot;btn btn-sm&quot;</span>&gt;small button&lt;<span class="tag">/button</span>&gt;

&lt;<span class="tag">button</span> <span class="atn">class</span>=<span class="atv">&quot;btn btn-block&quot;</span>&gt;block button&lt;<span class="tag">/button</span>&gt;
</pre>

            <div class="columns">
                <div class="column">
                    <button class="btn btn-primary btn-lg"><span class="icon icon-markunread"></span> large</button>
                    <button class="btn btn-primary"><span class="icon icon-markunread"></span> normal</button>
                    <button class="btn btn-primary btn-sm"><span class="icon icon-markunread"></span> small</button>
                </div>
            </div>
            <section class="notes">
                <p>Icons with the class <code class="label">icon</code> can be correctly rendered in each button size. </p>
            </section>

            <!-- buttons example -->
<pre class="code lang-html">
&lt;<span class="tag">button</span> <span class="atn">class</span>=<span class="atv">&quot;btn btn-primary btn-lg&quot;</span>&gt;&lt;<span class="tag">span</span> <span class="atn">class</span>=<span class="atv">&quot;icon icon-markunread&quot;</span>&gt;&lt;<span class="tag">/span</span>&gt; large&lt;<span class="tag">/button</span>&gt;
&lt;<span class="tag">button</span> <span class="atn">class</span>=<span class="atv">&quot;btn btn-primary&quot;</span>&gt;&lt;<span class="tag">span</span> <span class="atn">class</span>=<span class="atv">&quot;icon icon-markunread&quot;</span>&gt;&lt;<span class="tag">/span</span>&gt; normal&lt;<span class="tag">/button</span>&gt;
&lt;<span class="tag">button</span> <span class="atn">class</span>=<span class="atv">&quot;btn btn-primary btn-sm&quot;</span>&gt;&lt;<span class="tag">span</span> <span class="atn">class</span>=<span class="atv">&quot;icon icon-markunread&quot;</span>&gt;&lt;<span class="tag">/span</span>&gt; small&lt;<span class="tag">/button</span>&gt;
</pre>

            <header class="text-center"><h5>button groups</h5></header>
            <div class="columns">
                <div class="column">
                    <div class="btn-group">
                        <button class="btn">first button</button>
                        <button class="btn">second button</button>
                        <button class="btn">third button</button>
                    </div>
                </div>
                <div class="column">
                    <div class="btn-group btn-group-block">
                        <button class="btn btn-primary">first button</button>
                        <button class="btn btn-primary">second button</button>
                        <button class="btn btn-primary">third button</button>
                    </div>
                </div>
            </div>
            <section class="notes">
                <p>If you want to use buttons as a group, add the class <code class="label">btn-group</code> to the container. You can add the class <code class="label">btn-group-block</code> for a full-width button group.</p>
            </section>

            <!-- button groups example -->
<pre class="code lang-html">
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">&quot;btn-group btn-group-block&quot;</span>&gt;
    &lt;<span class="tag">button</span> <span class="atn">class</span>=<span class="atv">&quot;btn&quot;</span>&gt;first button&lt;<span class="tag">/button</span>&gt;
    &lt;<span class="tag">button</span> <span class="atn">class</span>=<span class="atv">&quot;btn&quot;</span>&gt;second button&lt;<span class="tag">/button</span>&gt;
    &lt;<span class="tag">button</span> <span class="atn">class</span>=<span class="atv">&quot;btn&quot;</span>&gt;third button&lt;<span class="tag">/button</span>&gt;
&lt;<span class="tag">/div</span>&gt;
</pre>

        </section>

        <section id="forms" class="grid-960">
            <header class="text-center"><h4>forms</h4></header>
            <section class="notes">
                <p><strong>Forms</strong> provide the most common control styles used in forms, including label, input, textarea, select, checkbox, radio and switch.  </p>
                <p></p>
            </section>
            <div class="columns">
                <div class="column col-6">
                    <form action="#forms">
                        <div class="form-group">
                            <label class="form-label" for="input-example-1">Name</label>
                            <input class="form-input is-danger" type="text" id="input-example-1" placeholder="Name" />
                        </div>
                        <div class="form-group has-success">
                            <label class="form-label" for="input-example-2">Email</label>
                            <input class="form-input" type="email" id="input-example-2" placeholder="Email" />
                        </div>
                        <div class="form-group">
                            <label class="form-label">Gender</label>
                            <label class="form-radio">
                                <input type="radio" name="gender" />
                                <i class="form-icon"></i> Male
                            </label>
                            <label class="form-radio">
                                <input type="radio" name="gender" checked />
                                <i class="form-icon"></i> Female
                            </label>
                        </div>
                        <div class="form-group hide">
                            <label class="form-file">
                                <input type="file" id="file">
                                <span class="file-custom"></span>
                            </label>
                        </div>
                        <div class="form-group">
                            <select class="form-select">
                                <option>Choose an option</option>
                                <option>Slack</option>
                                <option>Skype</option>
                                <option>Hipchat</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-switch">
                                <input type="checkbox" />
                                <i class="form-icon"></i> Send me emails with news and tips
                            </label>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="input-example-3">Message</label>
                            <textarea class="form-input" id="input-example-3" placeholder="Textarea" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label class="form-checkbox">
                                <input type="checkbox" />
                                <i class="form-icon"></i> Remember me
                            </label>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit">Submit</button>
                            <button class="btn btn-link" type="reset">Cancel</button>
                        </div>
                    </form>
                </div>
                <div class="column col-6">
                    <form class="form-horizontal" action="#forms">
                        <div class="form-group">
                            <label class="form-label col-3" for="input-example-4">Name</label>
                            <div class="col-9">
                                <input class="form-input" type="text" id="input-example-4" placeholder="Name" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label col-3" for="input-example-5">Email</label>
                            <div class="col-9">
                                <input class="form-input" type="email" id="input-example-5" placeholder="Email" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label col-3">Gender</label>
                            <div class="col-9">
                                <label class="form-radio">
                                    <input type="radio" name="gender" />
                                    <i class="form-icon"></i> Male
                                </label>
                                <label class="form-radio">
                                    <input type="radio" name="gender" checked />
                                    <i class="form-icon"></i> Female
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-3"></div>
                            <div class="col-9">
                                <select class="form-select">
                                    <option>Choose an option</option>
                                    <option>Slack</option>
                                    <option>Skype</option>
                                    <option>Hipchat</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-3"></div>
                            <div class="col-9">
                                <label class="form-switch">
                                    <input type="checkbox" />
                                    <i class="form-icon"></i> Send me emails with news and tips
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label col-3" for="input-example-6">Message</label>
                            <div class="col-9">
                                <textarea class="form-input" id="input-example-6" placeholder="Textarea" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-3"></div>
                            <div class="col-9">
                                <label class="form-checkbox">
                                    <input type="checkbox" />
                                    <i class="form-icon"></i> Remember me
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-3"></div>
                            <div class="col-9">
                                <button class="btn btn-primary" type="submit">Submit</button>
                                <button class="btn btn-link" type="reset">Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- forms example -->
<pre class="code lang-html">
&lt;<span class="tag">form</span>&gt;
    <span class="com">&lt;!-- form input control --&gt;</span>
    &lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">&quot;form-group&quot;</span>&gt;
        &lt;<span class="tag">label</span> <span class="atn">class</span>=<span class="atv">&quot;form-label&quot;</span> <span class="atn">for</span>=<span class="atv">&quot;input-example-1&quot;</span>&gt;Name&lt;<span class="tag">/label</span>&gt;
        &lt;<span class="tag">input</span> <span class="atn">class</span>=<span class="atv">&quot;form-input&quot;</span> <span class="atn">type</span>=<span class="atv">&quot;text&quot;</span> <span class="atn">id</span>=<span class="atv">&quot;input-example-1&quot;</span> <span class="atn">placeholder</span>=<span class="atv">&quot;Name&quot;</span> /&gt;
    &lt;<span class="tag">/div</span>&gt;
    <span class="com">&lt;!-- form radio control --&gt;</span>
    &lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">&quot;form-group&quot;</span>&gt;
        &lt;<span class="tag">label</span> <span class="atn">class</span>=<span class="atv">&quot;form-label&quot;</span>&gt;Gender&lt;<span class="tag">/label</span>&gt;
        &lt;<span class="tag">label</span> <span class="atn">class</span>=<span class="atv">&quot;form-radio&quot;</span>&gt;
            &lt;<span class="tag">input</span> <span class="atn">type</span>=<span class="atv">&quot;radio&quot;</span> <span class="atn">name</span>=<span class="atv">&quot;gender&quot;</span> /&gt;
            &lt;<span class="tag">i</span> <span class="atn">class</span>=<span class="atv">&quot;form-icon&quot;</span>&gt;&lt;<span class="tag">/i</span>&gt; Male
        &lt;<span class="tag">/label</span>&gt;
        &lt;<span class="tag">label</span> <span class="atn">class</span>=<span class="atv">&quot;form-radio&quot;</span>&gt;
            &lt;<span class="tag">input</span> <span class="atn">type</span>=<span class="atv">&quot;radio&quot;</span> <span class="atn">name</span>=<span class="atv">&quot;gender&quot;</span> <span class="atn">checked</span> /&gt;
            &lt;<span class="tag">i</span> <span class="atn">class</span>=<span class="atv">&quot;form-icon&quot;</span>&gt;&lt;<span class="tag">/i</span>&gt; Female
        &lt;<span class="tag">/label</span>&gt;
    &lt;<span class="tag">/div</span>&gt;
    <span class="com">&lt;!-- form select control --&gt;</span>
    &lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">&quot;form-group&quot;</span>&gt;
        &lt;<span class="tag">select</span> <span class="atn">class</span>=<span class="atv">&quot;form-select&quot;</span>&gt;
            &lt;<span class="tag">option</span>&gt;Choose an option&lt;<span class="tag">/option</span>&gt;
            &lt;<span class="tag">option</span>&gt;Slack&lt;<span class="tag">/option</span>&gt;
            &lt;<span class="tag">option</span>&gt;Skype&lt;<span class="tag">/option</span>&gt;
            &lt;<span class="tag">option</span>&gt;Hipchat&lt;<span class="tag">/option</span>&gt;
        &lt;<span class="tag">/select</span>&gt;
    &lt;<span class="tag">/div</span>&gt;
    <span class="com">&lt;!-- form switch control --&gt;</span>
    &lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">&quot;form-group&quot;</span>&gt;
        &lt;<span class="tag">label</span> <span class="atn">class</span>=<span class="atv">&quot;form-switch&quot;</span>&gt;
            &lt;<span class="tag">input</span> <span class="atn">type</span>=<span class="atv">&quot;checkbox&quot;</span> /&gt;
            &lt;<span class="tag">i</span> <span class="atn">class</span>=<span class="atv">&quot;form-icon&quot;</span>&gt;&lt;<span class="tag">/i</span>&gt; Send me emails with news and tips
        &lt;<span class="tag">/label</span>&gt;
    &lt;<span class="tag">/div</span>&gt;
    <span class="com">&lt;!-- form textarea control --&gt;</span>
    &lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">&quot;form-group&quot;</span>&gt;
        &lt;<span class="tag">label</span> <span class="atn">class</span>=<span class="atv">&quot;form-label&quot;</span> <span class="atn">for</span>=<span class="atv">&quot;input-example-3&quot;</span>&gt;Message&lt;<span class="tag">/label</span>&gt;
        &lt;<span class="tag">textarea</span> <span class="atn">class</span>=<span class="atv">&quot;form-input&quot;</span> <span class="atn">id</span>=<span class="atv">&quot;input-example-3&quot;</span> <span class="atn">placeholder</span>=<span class="atv">&quot;Textarea&quot;</span> <span class="atn">rows</span>=<span class="atv">&quot;3&quot;</span>&gt;&lt;<span class="tag">/textarea</span>&gt;
    &lt;<span class="tag">/div</span>&gt;
    <span class="com">&lt;!-- form checkbox control --&gt;</span>
    &lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">&quot;form-group&quot;</span>&gt;
        &lt;<span class="tag">label</span> <span class="atn">class</span>=<span class="atv">&quot;form-checkbox&quot;</span>&gt;
            &lt;<span class="tag">input</span> <span class="atn">type</span>=<span class="atv">&quot;checkbox&quot;</span> /&gt;
            &lt;<span class="tag">i</span> <span class="atn">class</span>=<span class="atv">&quot;form-icon&quot;</span>&gt;&lt;<span class="tag">/i</span>&gt;  Remember me
        &lt;<span class="tag">/label</span>&gt;
    &lt;<span class="tag">/div</span>&gt;
&lt;<span class="tag">/form</span>&gt;
</pre>

            <section class="notes">
                <p>If you want to have a horizontal form, add the class <code class="label">form-horizontal</code> to the &lt;form&gt; container. And add the class <code class="label">col-[1-12]</code> to the child elements for form row layout. Please note <code class="label">form-horizontal</code> only works in viewports that are at least 840px wide.</p>
            </section>

            <!-- forms example -->
<pre class="code lang-html">
&lt;<span class="tag">form</span> <span class="atn">class</span>=<span class="atv">&quot;form-horizontal&quot;</span>&gt;
    &lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">&quot;form-group&quot;</span>&gt;
        &lt;<span class="tag">label</span> <span class="atn">class</span>=<span class="atv">&quot;form-label col-3&quot;</span> <span class="atn">for</span>=<span class="atv">&quot;input-example-1&quot;</span>&gt;Name&lt;<span class="tag">/label</span>&gt;
        &lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">&quot;col-9&quot;</span>&gt;
            &lt;<span class="tag">input</span> <span class="atn">class</span>=<span class="atv">&quot;form-input&quot;</span> <span class="atn">type</span>=<span class="atv">&quot;text&quot;</span> <span class="atn">id</span>=<span class="atv">&quot;input-example-1&quot;</span> <span class="atn">placeholder</span>=<span class="atv">&quot;Name&quot;</span> /&gt;
        &lt;<span class="tag">/div</span>&gt;
    &lt;<span class="tag">/div</span>&gt;
    <span class="com">&lt;!-- form structure --&gt;</span>
&lt;<span class="tag">/form</span>&gt;
</pre>

            <section class="notes">
                <p>To use form validation styles, add <code class="label">is-success</code> and <code class="label">is-danger</code> to the controls or add <code class="label">has-success</code> and <code class="label">has-danger</code> to parent elements.</p>
            </section>

            <!-- forms example -->
<pre class="code lang-html">
&lt;<span class="tag">form</span>&gt;
    <span class="com">&lt;!-- form validation styles --&gt;</span>
    &lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">&quot;form-group has-success&quot;</span>&gt;
        &lt;<span class="tag">label</span> <span class="atn">class</span>=<span class="atv">&quot;form-label&quot;</span> <span class="atn">for</span>=<span class="atv">&quot;input-example-1&quot;</span>&gt;Name&lt;<span class="tag">/label</span>&gt;
        &lt;<span class="tag">input</span> <span class="atn">class</span>=<span class="atv">&quot;form-input is-success&quot;</span> <span class="atn">type</span>=<span class="atv">&quot;text&quot;</span> <span class="atn">id</span>=<span class="atv">&quot;input-example-1&quot;</span> <span class="atn">placeholder</span>=<span class="atv">&quot;Name&quot;</span> /&gt;
    &lt;<span class="tag">/div</span>&gt;
&lt;<span class="tag">/form</span>&gt;
</pre>

            <header class="text-center"><h5>input groups</h5></header>
            <div class="columns">
                <div class="column">
                    <div class="input-group">
                        <span class="input-group-addon">slack.com/</span>
                        <input type="text" class="form-input" placeholder="site name" />
                    </div>
                </div>
                <div class="column">
                    <div class="input-group">
                        <input type="text" class="form-input" placeholder="username" />
                        <span class="input-group-addon">@slack.com</span>
                    </div>
                </div>
                <div class="column">
                    <div class="input-group">
                        <span class="input-group-addon">slack.com/</span>
                        <input type="text" class="form-input" placeholder="site name" />
                        <button class="btn btn-primary input-group-btn">Submit</button>
                    </div>
                </div>
            </div>
            <section class="notes">
                <p>If you want to attach text and button along with an input, add the class <code class="label">input-group</code> to the input container. And add the class <code class="label">input-group-addon</code> to the text element and <code class="label">input-group-btn</code> to the button element.</p>
            </section>

            <!-- input groups example -->
<pre class="code lang-html">
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">&quot;input-group&quot;</span>&gt;
    &lt;<span class="tag">span</span> <span class="atn">class</span>=<span class="atv">&quot;input-group-addon&quot;</span>&gt;slack.com/&lt;<span class="tag">/span</span>&gt;
    &lt;<span class="tag">input</span> <span class="atn">type</span>=<span class="atv">&quot;text&quot;</span> <span class="atn">class</span>=<span class="atv">&quot;form-input&quot;</span> <span class="atn">placeholder</span>=<span class="atv">&quot;site name&quot;</span> /&gt;
&lt;<span class="tag">/div</span>&gt;

&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">&quot;input-group&quot;</span>&gt;
    &lt;<span class="tag">span</span> <span class="atn">class</span>=<span class="atv">&quot;input-group-addon&quot;</span>&gt;slack.com/&lt;<span class="tag">/span</span>&gt;
    &lt;<span class="tag">input</span> <span class="atn">type</span>=<span class="atv">&quot;text&quot;</span> <span class="atn">class</span>=<span class="atv">&quot;form-input&quot;</span> <span class="atn">placeholder</span>=<span class="atv">&quot;site name&quot;</span> /&gt;
    &lt;<span class="tag">button</span> <span class="atn">class</span>=<span class="atv">&quot;btn btn-primary input-group-btn&quot;</span>&gt;Submit&lt;<span class="tag">/button</span>&gt;
&lt;<span class="tag">/div</span>&gt;
</pre>

        </section>

        <section id="media" class="grid-960">
            <header class="text-center"><h4>media</h4></header>
            <section class="notes">
                <p><strong>Media</strong> include responsive image and video class. </p>
            </section>
            <div class="columns">
                <div class="column col-6">
                    <img src="demo/img/osx-el-capitan.jpg" class="img-responsive rounded" />
                </div>
            </div>
            <section class="notes">
                <p>Add the class <code class="label">img-responsive</code> to &lt;img&gt; elements. The images will scale with the parent sizes.</p>
            </section>
            <div class="columns">
                <div class="column col-6">
                    <div class="video-responsive">
                        <iframe src="https://www.youtube.com/embed/vBfBa-gCMQk" width="560" height="315" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <section class="notes">
                <p>For responsive video, add a container with the class <code class="label">video-responsive</code>. Insert any YouTube, Youku or other iframe/embed video inside the container. The ratio is 16:9 by default. You may add <code class="label">.video-responsive-4-3</code> for 4:3 ratio video container.</p>
            </section>

            <!-- media example -->
<pre class="code lang-html">
&lt;<span class="tag">img</span> <span class="atn">src</span>=<span class="atv">&quot;img/osx-el-capitan.jpg&quot;</span> <span class="atn">class</span>=<span class="atv">&quot;img-responsive rounded&quot;</span> /&gt;

&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">&quot;video-responsive&quot;</span>&gt;
    &lt;<span class="tag">iframe</span> <span class="atn">src</span>=<span class="atv">&quot;https://www.youtube.com/embed/vBfBa-gCMQk&quot;</span> <span class="atn">width</span>=<span class="atv">&quot;560&quot;</span> <span class="atn">height</span>=<span class="atv">&quot;315&quot;</span> <span class="atn">frameborder</span>=<span class="atv">&quot;0&quot;</span> <span class="atn">allowfullscreen</span>&gt;&lt;<span class="tag">/iframe</span>&gt;
&lt;<span class="tag">/div</span>&gt;
</pre>

        </section>

        <section id="components" class="grid-960">
            <section class="notes text-center">
                <ul class="tab inline-block">
                    <li class="tab-item">
                        <a href="#elements">
                            elements
                        </a>
                    </li>
                    <li class="tab-item active">
                        <a href="#components">
                            components
                        </a>
                    </li>
                    <li class="tab-item">
                        <a href="#utilities">
                            utilities
                        </a>
                    </li>
                </ul>
            </section>
            <section class="notes text-center">
                <div class="btn-group">
                    <a href="#avatars" class="btn btn-primary">avatars</a>
                    <a href="#chips" class="btn btn-primary">chips</a>
                    <a href="#autocomplete" class="btn btn-primary">autocomplete</a>
                    <a href="#tooltips" class="btn btn-primary">tooltips</a>
                    <a href="#labels" class="btn btn-primary">labels</a>
                    <a href="#badges" class="btn btn-primary">badges</a>
                    <a href="#toasts" class="btn btn-primary">toasts</a>
                    <a href="#menus" class="btn btn-primary">menus</a>
                    <a href="#navigation" class="btn btn-primary">navigation</a>
                    <a href="#modals" class="btn btn-primary">modals</a>
                    <a href="#cards" class="btn btn-primary">cards</a>
                </div>
            </section>
        </section>

        <section id="avatars" class="grid-960">
            <header class="text-center"><h4>avatars</h4></header>
            <section class="notes">
                <p><strong>Avatars</strong> are user profile pictures. </p>
            </section>
            <div class="columns">
                <div class="column col-3">
                    <figure class="avatar avatar-xl">
                        <img src="demo/img/avatar-1.png" />
                    </figure>
                    <figure class="avatar avatar-lg">
                        <img src="demo/img/avatar-2.png" />
                    </figure>
                    <figure class="avatar">
                        <img src="demo/img/avatar-3.png" />
                    </figure>
                    <figure class="avatar avatar-sm">
                        <img src="demo/img/avatar-4.png" />
                    </figure>
                    <figure class="avatar avatar-xs">
                        <img src="demo/img/avatar-5.png" />
                    </figure>
                </div>
                <div class="column col-3">
                    <figure class="avatar avatar-xl">
                        <img src="demo/img/avatar-1.png" />
                        <img src="demo/img/avatar-2.png" class="avatar-icon" />
                    </figure>
                    <figure class="avatar avatar-lg">
                        <img src="demo/img/avatar-2.png" />
                        <img src="demo/img/avatar-3.png" class="avatar-icon" />
                    </figure>
                    <figure class="avatar">
                        <img src="demo/img/avatar-3.png" />
                        <img src="demo/img/avatar-4.png" class="avatar-icon" />
                    </figure>
                    <figure class="avatar avatar-sm">
                        <img src="demo/img/avatar-4.png" />
                        <img src="demo/img/avatar-5.png" class="avatar-icon" />
                    </figure>
                    <figure class="avatar avatar-xs">
                        <img src="demo/img/avatar-5.png" />
                        <img src="demo/img/avatar-1.png" class="avatar-icon" />
                    </figure>
                </div>

                <div class="column col-3">
                    <figure class="avatar avatar-xl" data-initial="YZ" style="background-color: #5764c6;"></figure>
                    <figure class="avatar avatar-lg" data-initial="YZ" style="background-color: #6874cc;"></figure>
                    <figure class="avatar" data-initial="YZ" style="background-color: #7983d2;"></figure>
                    <figure class="avatar avatar-sm" data-initial="YZ" style="background-color: #8a93d7;"></figure>
                    <figure class="avatar avatar-xs" data-initial="YZ" style="background-color: #9ba2dd;"></figure>
                </div>
            </div>

            <section class="notes">
                <p>Add the class <code class="label">avatar</code> to &lt;img&gt; element. There are 4 additional sizes available, including <code class="label">avatar-xl</code> (64px), <code class="label">avatar-lg</code> (48px), <code class="label">avatar-sm</code> (24px), and <code class="label">avatar-xs</code> (16px). By default, the avatar size is 32px.</p>
                <p>For users who don't have profile pictures, you may use their initials for avatars. Add the class <code class="label">avatar</code> and avatar size class to &lt;div&gt; element. The attribute <code class="label">data-initial</code> is the name appear inside the avatar.</p>
            </section>

            <!-- avatars example -->
<pre class="code lang-html">
&lt;<span class="tag">figure</span> <span class="atn">class</span>=<span class="atv">&quot;avatar avatar-xl&quot;</span>&gt;
    &lt;<span class="tag">img</span> <span class="atn">src</span>=<span class="atv">&quot;img/avatar-1.png&quot;</span> /&gt;
&lt;<span class="tag">/figure</span>&gt;

&lt;<span class="tag">figure</span> <span class="atn">class</span>=<span class="atv">&quot;avatar avatar-xl&quot;</span>&gt;
    &lt;<span class="tag">img</span> <span class="atn">src</span>=<span class="atv">&quot;img/avatar-1.png&quot;</span> /&gt;
    &lt;<span class="tag">img</span> <span class="atn">src</span>=<span class="atv">&quot;img/avatar-5.png&quot;</span> <span class="atn">class</span>=<span class="atv">&quot;avatar-icon&quot;</span> /&gt;
&lt;<span class="tag">/figure</span>&gt;

&lt;<span class="tag">figure</span> <span class="atn">class</span>=<span class="atv">&quot;avatar avatar-xl&quot;</span> <span class="atn">data-initial</span>=<span class="atv">&quot;YZ&quot;</span> <span class="atn">style</span>=<span class="atv">&quot;background-color: #5764c6;&quot;</span>&gt;&lt;<span class="tag">/figure</span>&gt;
</pre>

        </section>

        <section id="chips" class="grid-960">
            <header class="text-center"><h4>chips</h4></header>
            <section class="notes">
                <p><strong>Chips</strong> are complex entities in small blocks. </p>
            </section>
            <div class="columns">
                <div class="column">
                    <div class="chip-sm">
                        <span class="chip-name">Crime</span>
                        <button class="btn btn-clear"></button>
                    </div>
                    <div class="chip-sm">
                        <span class="icon icon-favorite_border"></span>
                        <span class="chip-name">Drama</span>
                        <button class="btn btn-clear"></button>
                    </div>
                    <div class="chip-sm">
                        <span class="chip-name">Biography</span>
                        <button class="btn btn-clear"></button>
                    </div>
                    <div class="chip-sm">
                        <span class="chip-name">Mystery</span>
                        <button class="btn btn-clear"></button>
                    </div>
                </div>
                <div class="column">
                    <div class="chip-sm">
                        <img src="demo/img/avatar-1.png" class="avatar" />
                        <span class="chip-name">Tony Stark</span>
                        <button class="btn btn-clear"></button>
                    </div>
                    <div class="chip-sm">
                        <img src="demo/img/avatar-2.png" class="avatar" />
                        <span class="chip-name">Thor Odinson</span>
                        <button class="btn btn-clear"></button>
                    </div>
                    <div class="chip-sm">
                        <img src="demo/img/avatar-4.png" class="avatar" />
                        <span class="chip-name">Steve Rogers</span>
                        <button class="btn btn-clear"></button>
                    </div>
                </div>
            </div>
            <!-- <div class="columns">
                <div class="column">
                    <div class="chip">
                        <div class="chip-list-icon">
                            <img src="demo/img/avatar-1.png" class="avatar" />
                        </div>
                        <div class="chip-list-content">
                            Yan Zhu
                        </div>
                        <div class="chip-list-action">
                            <button class="btn">
                                <i class="icon icon-message"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="column">

                </div>
            </div> -->

            <section class="notes">
                <p>Add a container element with the class <code class="label">chip</code>. And add child text elements with <code class="label">chip-name</code> or icons with  <code class="label">icon</code>.</p>
            </section>

            <!-- chips example -->
<pre class="code lang-html">
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">&quot;chip-sm&quot;</span>&gt;
    &lt;<span class="tag">span</span> <span class="atn">class</span>=<span class="atv">&quot;chip-name&quot;</span>&gt;Crime&lt;<span class="tag">/span</span>&gt;
    &lt;<span class="tag">button</span> <span class="atn">class</span>=<span class="atv">&quot;btn btn-clear&quot;</span>&gt;&lt;<span class="tag">/button</span>&gt;
&lt;<span class="tag">/div</span>&gt;

&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">&quot;chip-sm&quot;</span>&gt;
    &lt;<span class="tag">span</span> <span class="atn">class</span>=<span class="atv">&quot;icon icon-favorite_border&quot;</span>&gt;&lt;<span class="tag">/span</span>&gt;
    &lt;<span class="tag">span</span> <span class="atn">class</span>=<span class="atv">&quot;chip-name&quot;</span>&gt;Drama&lt;<span class="tag">/span</span>&gt;
    &lt;<span class="tag">button</span> <span class="atn">class</span>=<span class="atv">&quot;btn btn-clear&quot;</span>&gt;&lt;<span class="tag">/button</span>&gt;
&lt;<span class="tag">/div</span>&gt;

&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">&quot;chip-sm&quot;</span>&gt;
    &lt;<span class="tag">img</span> <span class="atn">src</span>=<span class="atv">&quot;img/avatar-1.png&quot;</span> <span class="atn">class</span>=<span class="atv">&quot;avatar&quot;</span> /&gt;
    &lt;<span class="tag">span</span> <span class="atn">class</span>=<span class="atv">&quot;chip-name&quot;</span>&gt;Yan Zhu&lt;<span class="tag">/span</span>&gt;
    &lt;<span class="tag">button</span> <span class="atn">class</span>=<span class="atv">&quot;btn btn-clear&quot;</span>&gt;&lt;<span class="tag">/button</span>&gt;
&lt;<span class="tag">/div</span>&gt;
</pre>

        </section>

        <section id="autocomplete" class="grid-960">
            <header class="text-center"><h4>autocomplete</h4></header>
            <section class="notes">
                <p><strong>Autocomplete</strong> form component provides suggestions while you type. It is often used for tags and contacts input. </p>
            </section>
            <div class="columns">
                <div class="column col-6">
                    <div class="form-group">
                        <div class="form-autocomplete">
                            <div class="form-autocomplete-input">
                                <div class="chip-sm">
                                    <img src="demo/img/avatar-1.png" class="avatar" />
                                    <span class="chip-name">Tony Stark</span>
                                    <button class="btn btn-clear"></button>
                                </div>
                                <div class="chip-sm">
                                    <img src="demo/img/avatar-2.png" class="avatar" />
                                    <span class="chip-name">Thor Odinson</span>
                                    <button class="btn btn-clear"></button>
                                </div>
                                <div class="chip-sm">
                                    <img src="demo/img/avatar-4.png" class="avatar" />
                                    <span class="chip-name">Steve Rogers</span>
                                    <button class="btn btn-clear"></button>
                                </div>
                                <div class="chip-sm">
                                    <img src="demo/img/avatar-1.png" class="avatar" />
                                    <span class="chip-name">Bruce Banner</span>
                                    <button class="btn btn-clear"></button>
                                </div>
                                <div class="chip-sm selected">
                                    <img src="demo/img/avatar-2.png" class="avatar" />
                                    <span class="chip-name">Natasha Romanoff</span>
                                    <button class="btn btn-clear"></button>
                                </div>
                                <input class="form-input" type="text" placeholder="" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-autocomplete">
                            <div class="form-autocomplete-input">
                                <div class="chip-sm">
                                    <span class="chip-name">Tony Stark</span>
                                    <button class="btn btn-clear"></button>
                                </div>
                                <div class="chip-sm">
                                    <span class="chip-name">Thor Odinson</span>
                                    <button class="btn btn-clear"></button>
                                </div>
                                <div class="chip-sm">
                                    <span class="chip-name">Steve Rogers</span>
                                    <button class="btn btn-clear"></button>
                                </div>
                                <div class="chip-sm">
                                    <span class="chip-name">Bruce Banner</span>
                                    <button class="btn btn-clear"></button>
                                </div>
                                <div class="chip-sm selected">
                                    <span class="chip-name">Natasha Romanoff</span>
                                    <button class="btn btn-clear"></button>
                                </div>
                                <input class="form-input" type="text" placeholder="" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column col-6">
                    <div class="form-group">
                        <div class="form-autocomplete">
                            <div class="form-autocomplete-input">
                                <div class="chip-sm">
                                    <img src="demo/img/avatar-1.png" class="avatar" />
                                    <span class="chip-name">Tony Stark</span>
                                    <button class="btn btn-clear"></button>
                                </div>
                                <div class="chip-sm">
                                    <img src="demo/img/avatar-2.png" class="avatar" />
                                    <span class="chip-name">Thor Odinson</span>
                                    <button class="btn btn-clear"></button>
                                </div>
                                <input class="form-input" type="text" placeholder="typing here" />
                            </div>
                            <ul class="form-autocomplete-list">
                                <li class="chip hand">
                                    <div class="chip-icon">
                                        <img src="demo/img/avatar-4.png" class="avatar" />
                                    </div>
                                    <div class="chip-content">
                                        Steve Rogers
                                    </div>
                                    <div class="chip-action">

                                    </div>
                                </li>
                                <li class="chip hand">
                                    <div class="chip-icon">
                                        <img src="demo/img/avatar-2.png" class="avatar" />
                                    </div>
                                    <div class="chip-content">
                                        Yan Zhu
                                    </div>
                                    <div class="chip-action">

                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <section class="notes">
                <p>Add a container element with the class <code class="label">form-autocomplete</code>. There are 2 parts of it, one is  <code class="label">form-autocomplete-input</code>, another is <code class="label">form-autocomplete-list</code>. Spectre.css does not include JavaScript code, you will need to implement your JS to interact with the autocomplete. The autocomplete HTML structure is exampled below. </p>
            </section>

            <!-- autocomplete example -->
<pre class="code lang-html">
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">&quot;form-autocomplete&quot;</span>&gt;
    <span class="com">&lt;!-- autocomplete input container --&gt;</span>
    &lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">&quot;form-autocomplete-input&quot;</span>&gt;
        <span class="com">&lt;!-- autocomplete chips --&gt;</span>
        &lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">&quot;chip-sm&quot;</span>&gt;
            &lt;<span class="tag">img</span> <span class="atn">src</span>=<span class="atv">&quot;img/avatar-1.png&quot;</span> <span class="atn">class</span>=<span class="atv">&quot;avatar&quot;</span> /&gt;
            &lt;<span class="tag">span</span> <span class="atn">class</span>=<span class="atv">&quot;chip-name&quot;</span>&gt;Yan Zhu&lt;<span class="tag">/span</span>&gt;
            &lt;<span class="tag">button</span> <span class="atn">class</span>=<span class="atv">&quot;btn btn-clear&quot;</span>&gt;&lt;<span class="tag">/button</span>&gt;
        &lt;<span class="tag">/div</span>&gt;
        &lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">&quot;chip-sm selected&quot;</span>&gt;
            &lt;<span class="tag">img</span> <span class="atn">src</span>=<span class="atv">&quot;img/avatar-2.png&quot;</span> <span class="atn">class</span>=<span class="atv">&quot;avatar&quot;</span> /&gt;
            &lt;<span class="tag">span</span> <span class="atn">class</span>=<span class="atv">&quot;chip-name&quot;</span>&gt;Yan Zhu&lt;<span class="tag">/span</span>&gt;
            &lt;<span class="tag">button</span> <span class="atn">class</span>=<span class="atv">&quot;btn btn-clear&quot;</span>&gt;&lt;<span class="tag">/button</span>&gt;
        &lt;<span class="tag">/div</span>&gt;
        <span class="com">&lt;!-- autocomplete real input box --&gt;</span>
        &lt;<span class="tag">input</span> <span class="atn">class</span>=<span class="atv">&quot;form-input&quot;</span> <span class="atn">type</span>=<span class="atv">&quot;text&quot;</span> <span class="atn">placeholder</span>=<span class="atv">&quot;typing here&quot;</span> /&gt;
    &lt;<span class="tag">/div</span>&gt;
    <span class="com">&lt;!-- autocomplete suggestion list --&gt;</span>
    &lt;<span class="tag">ul</span> <span class="atn">class</span>=<span class="atv">&quot;form-autocomplete-list&quot;</span>&gt;
        <span class="com">&lt;!-- autocomplete list chips --&gt;</span>
        &lt;<span class="tag">li</span> <span class="atn">class</span>=<span class="atv">&quot;chip hand&quot;</span>&gt;
            &lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">&quot;chip-icon&quot;</span>&gt;
                &lt;<span class="tag">img</span> <span class="atn">src</span>=<span class="atv">&quot;img/avatar-4.png&quot;</span> <span class="atn">class</span>=<span class="atv">&quot;avatar&quot;</span> /&gt;
            &lt;<span class="tag">/div</span>&gt;
            &lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">&quot;chip-content&quot;</span>&gt;
                Steve Rogers
            &lt;<span class="tag">/div</span>&gt;
            &lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">&quot;chip-action&quot;</span>&gt;
                &lt;<span class="tag">button</span> <span class="atn">class</span>=<span class="atv">&quot;btn&quot;</span>&gt;&lt;<span class="tag">span</span> <span class="atn">class</span>=<span class="atv">&quot;icon icon-markunread&quot;</span>&gt;&lt;<span class="tag">/span</span>&gt;&lt;<span class="tag">/button</span>&gt;
            &lt;<span class="tag">/div</span>&gt;
        &lt;<span class="tag">/li</span>&gt;
        &lt;<span class="tag">li</span> <span class="atn">class</span>=<span class="atv">&quot;chip hand&quot;</span>&gt;
            &lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">&quot;chip-icon&quot;</span>&gt;
                &lt;<span class="tag">img</span> <span class="atn">src</span>=<span class="atv">&quot;img/avatar-3.png&quot;</span> <span class="atn">class</span>=<span class="atv">&quot;avatar&quot;</span> /&gt;
            &lt;<span class="tag">/div</span>&gt;
            &lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">&quot;chip-content&quot;</span>&gt;
                Yan Zhu
            &lt;<span class="tag">/div</span>&gt;
            &lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">&quot;chip-action&quot;</span>&gt;
                &lt;<span class="tag">button</span> <span class="atn">class</span>=<span class="atv">&quot;btn&quot;</span>&gt;&lt;<span class="tag">span</span> <span class="atn">class</span>=<span class="atv">&quot;icon icon-markunread&quot;</span>&gt;&lt;<span class="tag">/span</span>&gt;&lt;<span class="tag">/button</span>&gt;
            &lt;<span class="tag">/div</span>&gt;
        &lt;<span class="tag">/li</span>&gt;
    &lt;<span class="tag">/ul</span>&gt;
&lt;<span class="tag">/div</span>&gt;
</pre>

        </section>

        <section id="tooltips" class="grid-960">
            <header class="text-center"><h4>tooltips</h4></header>
            <section class="notes">
                <p><strong>Tooltips</strong> provide context information labels that appear on hover and focus.</p>
            </section>
            <div class="columns text-center">
                <div class="column">
                    <button class="btn btn-primary tooltip" data-tooltip="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante." data-tooltip-pos="top">top tooltip</button>
                </div>
                <div class="column">
                    <button class="btn btn-primary tooltip tooltip-right" data-tooltip="Lorem ipsum dolor sit amet">right tooltip</button>
                </div>
                <div class="column">
                    <button class="btn btn-primary tooltip tooltip-bottom" data-tooltip="Lorem ipsum dolor sit amet">bottom tooltip</button>
                </div>
                <div class="column">
                    <button class="btn btn-primary tooltip tooltip-left" data-tooltip="Lorem ipsum dolor sit amet">left tooltip</button>
                </div>
            </div>
            <section class="notes">
                <p>Tooltip component is built entirely in CSS.</p>
                <p>Add the class <code class="label">tooltip</code> and the attribute <code class="label">data-tooltip</code>, which contains the tooltip content, to non self closing elements. And add the class name <code class="label">tooltip-right</code>, <code class="label">tooltip-bottom</code> or <code class="label">tooltip-left</code> to define the position of a tooltip. By default, the tooltip appears above the element.</p>
            </section>

            <!-- tooltips example -->
<pre class="code lang-html">
&lt;<span class="tag">button</span> <span class="atn">class</span>=<span class="atv">&quot;btn tooltip&quot;</span> <span class="atn">data-tooltip</span>=<span class="atv">&quot;Lorem ipsum dolor sit amet&quot;</span>&gt;top tooltip&lt;<span class="tag">/button</span>&gt;
&lt;<span class="tag">button</span> <span class="atn">class</span>=<span class="atv">&quot;btn tooltip tooltip-right&quot;</span> <span class="atn">data-tooltip</span>=<span class="atv">&quot;Lorem ipsum dolor sit amet&quot;</span>&gt;right tooltip&lt;<span class="tag">/button</span>&gt;
</pre>

        </section>

        <section id="labels" class="grid-960">
            <header class="text-center"><h4>labels</h4></header>
            <section class="notes">
                <p><strong>Labels</strong> are formatted text tags for highlighted, informative information.</p>
            </section>
            <div class="columns">
                <div class="column">
                    <span class="label">default label</span>
                    <span class="label label-primary">primary label</span>
                </div>
            </div>
            <section class="notes">
                <p>Add the class <code class="label">label</code> to &lt;span&gt; or &lt;small&gt; elements. You can add another class <code class="label">label-primary</code> for a primary colored label.</p>
            </section>

            <!-- labels example -->
<pre class="code lang-html">
&lt;<span class="tag">span</span> <span class="atn">class</span>=<span class="atv">&quot;label&quot;</span>&gt;default label&lt;<span class="tag">/span</span>&gt;
&lt;<span class="tag">span</span> <span class="atn">class</span>=<span class="atv">&quot;label label-primary&quot;</span>&gt;primary label&lt;<span class="tag">/span</span>&gt;
</pre>

        </section>

        <section id="badges" class="grid-960">
            <header class="text-center"><h4>badges</h4></header>
            <section class="notes">
                <p><strong>Badges</strong> are often used as unread number indicators.</p>
            </section>
            <div class="columns">
                <div class="column">
                    <span class="badge" data-badge="1">
                        Notifications
                    </span>
                </div>
                <div class="column">
                    <span class="badge" data-badge="99">
                        Notifications
                    </span>
                </div>
                <div class="column">
                    <span class="badge" data-badge="999">
                        Notifications
                    </span>
                </div>
                <div class="column">
                    <span class="badge" data-badge="?">
                        Notifications
                    </span>
                </div>
            </div>
            <section class="notes">
                <p>Add the class <code class="label">badge</code> to non self closing elements. And add the attribute <code class="label">data-badge</code> to define the content of a badge. The badge will appear in the top-right direction of the element.</p>
            </section>

            <!-- badges example -->
<pre class="code lang-html">
&lt;<span class="tag">span</span> <span class="atn">class</span>=<span class="atv">&quot;badge&quot;</span> <span class="atn">data-badge</span>=<span class="atv">&quot;99&quot;</span>&gt;
    Notifications
&lt;<span class="tag">/span</span>&gt;
</pre>

        </section>

        <section id="toasts" class="grid-960">
            <header class="text-center"><h4>toasts</h4></header>
            <section class="notes">
                <p><strong>Toasts</strong> are used to show alert or information to users.</p>
            </section>
            <div class="columns">
                <div class="column">
                    <div class="toast">
                        <button class="btn btn-clear float-right"></button>
                        <span class="icon icon-error_outline"></span> Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </div>
                </div>
                <div class="column">
                    <div class="toast toast-primary">
                        <button class="btn btn-clear float-right"></button>
                        <span class="icon icon-error_outline"></span> Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </div>
                </div>
            </div>
            <section class="notes">
                <p>Add a container element with the class <code class="label">toast</code>. You can add any text within the container, and even icons. You may also add a close button with the class <code class="label">btn-clear</code> if you need. </p>
                <p>And you can add the class <code class="label">toast-primary</code> for primary toast color.</p>
            </section>

            <!-- toasts example -->
<pre class="code lang-html">
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">&quot;toast&quot;</span>&gt;
    &lt;<span class="tag">button</span> <span class="atn">class</span>=<span class="atv">&quot;btn btn-clear float-right&quot;</span>&gt;&lt;<span class="tag">/button</span>&gt;
    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
&lt;<span class="tag">/div</span>&gt;

&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">&quot;toast toast-primary&quot;</span>&gt;
    &lt;<span class="tag">button</span> <span class="atn">class</span>=<span class="atv">&quot;btn btn-clear float-right&quot;</span>&gt;&lt;<span class="tag">/button</span>&gt;
    &lt;<span class="tag">span</span> <span class="atn">class</span>=<span class="atv">&quot;icon icon-error_outline&quot;</span>&gt;&lt;<span class="tag">/span</span>&gt;
    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
&lt;<span class="tag">/div</span>&gt;
</pre>

        </section>

        <section id="menus" class="grid-960">
            <header class="text-center"><h4>menus</h4></header>
            <section class="notes">
                <p>A <strong>menu</strong> is a vertical list of links or buttons for actions and navigation.</p>
            </section>
            <div class="columns">
                <div class="column">
                    <ul class="menu">
                        <li class="menu-item">
                            <a href="#menus" class="active">
                                My profile
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li class="menu-item">
                            <a href="#menus">
                                Settings
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="#menus">
                                Logout
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="column">
                    <ul class="menu">
                        <li class="menu-header">
                            <span class="menu-header-text">
                                Go to
                            </span>
                        </li>
                        <li class="menu-item">
                            <a href="#menus">
                                Slack
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="#menus">
                                Hipchat
                            </a>
                        </li>
                        <li class="menu-item">
                            Skype
                        </li>
                    </ul>
                </div>
                <div class="column">
                    <ul class="menu">
                        <li class="menu-header">
                            <span class="menu-header-text">
                                Go to
                            </span>
                        </li>
                        <li class="menu-item">
                            <a href="#menus">
                                <span class="icon icon-link"></span> Slack
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="#menus">
                                <span class="icon icon-link"></span> Hipchat
                            </a>
                        </li>
                        <li class="menu-item">
                            <span class="icon icon-link"></span> Skype
                        </li>
                    </ul>
                </div>
            </div>
            <section class="notes">
                <p>Add a container element with the class <code class="label">menu</code>. And add child elements with the classname <code class="label">menu-item</code>. You can separate menu items with a <code class="label">divider</code> or <code class="label">menu-header</code>. Spectre.css does not include JavaScript code, you will need to implement your JS to interact with the menus.</p>
            </section>

            <!-- menus example -->
<pre class="code lang-html">
&lt;<span class="tag">ul</span> <span class="atn">class</span>=<span class="atv">&quot;menu&quot;</span>&gt;
    <span class="com">&lt;!-- menu header --&gt;</span>
    &lt;<span class="tag">li</span> <span class="atn">class</span>=<span class="atv">&quot;menu-header&quot;</span>&gt;
        &lt;<span class="tag">span</span> <span class="atn">class</span>=<span class="atv">&quot;menu-header-text&quot;</span>&gt;
            Go to
        &lt;<span class="tag">/span</span>&gt;
    &lt;<span class="tag">/li</span>&gt;
    <span class="com">&lt;!-- menu item --&gt;</span>
    &lt;<span class="tag">li</span> <span class="atn">class</span>=<span class="atv">&quot;menu-item&quot;</span>&gt;
        &lt;<span class="tag">a</span> <span class="atn">href</span>=<span class="atv">&quot;#&quot;</span>&gt;
            &lt;<span class="tag">span</span> <span class="atn">class</span>=<span class="atv">&quot;icon icon-link&quot;</span>&gt;&lt;<span class="tag">/span</span>&gt; Slack
        &lt;<span class="tag">/a</span>&gt;
    &lt;<span class="tag">/li</span>&gt;
    &lt;<span class="tag">li</span> <span class="atn">class</span>=<span class="atv">&quot;menu-item&quot;</span>&gt;
        &lt;<span class="tag">a</span> <span class="atn">href</span>=<span class="atv">&quot;#&quot;</span>&gt;
            &lt;<span class="tag">span</span> <span class="atn">class</span>=<span class="atv">&quot;icon icon-link&quot;</span>&gt;&lt;<span class="tag">/span</span>&gt; Hipchat
        &lt;<span class="tag">/a</span>&gt;
    &lt;<span class="tag">/li</span>&gt;
    &lt;<span class="tag">li</span> <span class="atn">class</span>=<span class="atv">&quot;menu-item&quot;</span>&gt;
        &lt;<span class="tag">a</span> <span class="atn">href</span>=<span class="atv">&quot;#&quot;</span>&gt;
            &lt;<span class="tag">span</span> <span class="atn">class</span>=<span class="atv">&quot;icon icon-link&quot;</span>&gt;&lt;<span class="tag">/span</span>&gt; Skype
        &lt;<span class="tag">/a</span>&gt;
    &lt;<span class="tag">/li</span>&gt;
    <span class="com">&lt;!-- menu divider --&gt;</span>
    &lt;<span class="tag">li</span> <span class="atn">class</span>=<span class="atv">&quot;divider&quot;</span>&gt;&lt;<span class="tag">/li</span>&gt;
    &lt;<span class="tag">li</span> <span class="atn">class</span>=<span class="atv">&quot;menu-item&quot;</span>&gt;
        &lt;<span class="tag">a</span> <span class="atn">href</span>=<span class="atv">&quot;#&quot;</span>&gt;
            &lt;<span class="tag">span</span> <span class="atn">class</span>=<span class="atv">&quot;icon icon-link&quot;</span>&gt;&lt;<span class="tag">/span</span>&gt; Settings
        &lt;<span class="tag">/a</span>&gt;
    &lt;<span class="tag">/li</span>&gt;
&lt;<span class="tag">/ul</span>&gt;
</pre>

        </section>

        <section id="navigation" class="grid-960">
            <header class="text-center"><h4>navigation</h4></header>
            <section class="notes">
                <p><strong>Navigation</strong> includes several components, including breadcrumbs and tabs.</p>
            </section>
            <header id="breadcrumbs" class="text-center"><h5>breadcrumbs</h5></header>
            <div class="columns">
                <div class="column">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#breadcrumbs">
                                Home
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#breadcrumbs">
                                Profile
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#breadcrumbs">
                                Change avatar
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <section class="notes">
                <p>Add a container element with the class <code class="label">breadcrumb</code>. And add child elements with the classname <code class="label">breadcrumb-item</code>.</p>
            </section>

            <!-- breadcrumbs example -->
<pre class="code lang-html">
&lt;<span class="tag">ul</span> <span class="atn">class</span>=<span class="atv">&quot;breadcrumb&quot;</span>&gt;
    &lt;<span class="tag">li</span> <span class="atn">class</span>=<span class="atv">&quot;breadcrumb-item&quot;</span>&gt;
        &lt;<span class="tag">a</span> <span class="atn">href</span>=<span class="atv">&quot;#&quot;</span>&gt;
            Home
        &lt;<span class="tag">/a</span>&gt;
    &lt;<span class="tag">/li</span>&gt;
    &lt;<span class="tag">li</span> <span class="atn">class</span>=<span class="atv">&quot;breadcrumb-item&quot;</span>&gt;
        &lt;<span class="tag">a</span> <span class="atn">href</span>=<span class="atv">&quot;#&quot;</span>&gt;
            Profile
        &lt;<span class="tag">/a</span>&gt;
    &lt;<span class="tag">/li</span>&gt;
    &lt;<span class="tag">li</span> <span class="atn">class</span>=<span class="atv">&quot;breadcrumb-item&quot;</span>&gt;
        &lt;<span class="tag">a</span> <span class="atn">href</span>=<span class="atv">&quot;#&quot;</span>&gt;
            Change avatar
        &lt;<span class="tag">/a</span>&gt;
    &lt;<span class="tag">/li</span>&gt;
&lt;<span class="tag">/ul</span>&gt;
</pre>

            <header id="tabs" class="text-center"><h5>tabs</h5></header>
            <div class="columns">
                <div class="column">
                    <ul class="tab">
                        <li class="tab-item active">
                            <a href="#tabs">
                                Music
                            </a>
                        </li>
                        <li class="tab-item">
                            <a href="#tabs">
                                Playlists
                            </a>
                        </li>
                        <li class="tab-item">
                            <a href="#tabs">
                                Radio
                            </a>
                        </li>
                        <li class="tab-item">
                            <a href="#tabs">
                                Connect
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="column">
                    <ul class="tab tab-block">
                        <li class="tab-item active">
                            <a href="#tabs">
                                Music
                            </a>
                        </li>
                        <li class="tab-item">
                            <a href="#tabs">
                                Playlists
                            </a>
                        </li>
                        <li class="tab-item">
                            <a href="#tabs">
                                Radio
                            </a>
                        </li>
                        <li class="tab-item">
                            <a href="#tabs">
                                Connect
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <section class="notes">
                <p>Add a container element with the class <code class="label">tab</code>. And add child elements with the classname <code class="label">tab-item</code>. You can add the class <code class="label">tab-block</code> for a full-width tab.</p>
            </section>

            <!-- tabs example -->
<pre class="code lang-html">
&lt;<span class="tag">ul</span> <span class="atn">class</span>=<span class="atv">&quot;tab tab-block&quot;</span>&gt;
    &lt;<span class="tag">li</span> <span class="atn">class</span>=<span class="atv">&quot;tab-item active&quot;</span>&gt;
        &lt;<span class="tag">a</span> <span class="atn">href</span>=<span class="atv">&quot;#&quot;</span>&gt;
            Music
        &lt;<span class="tag">/a</span>&gt;
    &lt;<span class="tag">/li</span>&gt;
    &lt;<span class="tag">li</span> <span class="atn">class</span>=<span class="atv">&quot;tab-item&quot;</span>&gt;
        &lt;<span class="tag">a</span> <span class="atn">href</span>=<span class="atv">&quot;#&quot;</span>&gt;
            Playlists
        &lt;<span class="tag">/a</span>&gt;
    &lt;<span class="tag">/li</span>&gt;
    &lt;<span class="tag">li</span> <span class="atn">class</span>=<span class="atv">&quot;tab-item&quot;</span>&gt;
        &lt;<span class="tag">a</span> <span class="atn">href</span>=<span class="atv">&quot;#&quot;</span>&gt;
            Radio
        &lt;<span class="tag">/a</span>&gt;
    &lt;<span class="tag">/li</span>&gt;
    &lt;<span class="tag">li</span> <span class="atn">class</span>=<span class="atv">&quot;tab-item&quot;</span>&gt;
        &lt;<span class="tag">a</span> <span class="atn">href</span>=<span class="atv">&quot;#&quot;</span>&gt;
            Connect
        &lt;<span class="tag">/a</span>&gt;
    &lt;<span class="tag">/li</span>&gt;
&lt;<span class="tag">/ul</span>&gt;
</pre>

            <header id="pagination" class="text-center"><h5>pagination</h5></header>
            <div class="columns">
                <div class="column">
                    <ul class="pagination">
                        <li class="page-item">
                            <a href="#pagination">
                                Previous
                            </a>
                        </li>
                        <li class="page-item">
                            <a href="#pagination">
                                1
                            </a>
                        </li>
                        <li class="page-item">
                            <span>...</span>
                        </li>
                        <li class="page-item">
                            <a href="#pagination">
                                6
                            </a>
                        </li>
                        <li class="page-item active">
                            <a href="#pagination">
                                7
                            </a>
                        </li>
                        <li class="page-item">
                            <a href="#pagination">
                                8
                            </a>
                        </li>
                        <li class="page-item">
                            <span>...</span>
                        </li>
                        <li class="page-item">
                            <a href="#pagination">
                                12
                            </a>
                        </li>
                        <li class="page-item">
                            <a href="#pagination">
                                Next
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="column">
                    <ul class="pagination">
                        <li class="page-item">
                            <a href="#pagination" class="disabled">
                                Previous
                            </a>
                        </li>
                        <li class="page-item active">
                            <a href="#pagination">
                                1
                            </a>
                        </li>
                        <li class="page-item">
                            <a href="#pagination">
                                2
                            </a>
                        </li>
                        <li class="page-item">
                            <a href="#pagination">
                                3
                            </a>
                        </li>
                        <li class="page-item">
                            <span>...</span>
                        </li>
                        <li class="page-item">
                            <a href="#pagination">
                                12
                            </a>
                        </li>
                        <li class="page-item">
                            <a href="#pagination">
                                Next
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <section class="notes">
                <p>Add a container element with the class <code class="label">pagination</code>. And add child elements with the classname <code class="label">page-item</code>.</p>
            </section>

            <!-- pagination example -->
<pre class="code lang-html">
&lt;<span class="tag">ul</span> <span class="atn">class</span>=<span class="atv">&quot;pagination&quot;</span>&gt;
    &lt;<span class="tag">li</span> <span class="atn">class</span>=<span class="atv">&quot;page-item&qquot;</span>&gt;
        &lt;<span class="tag">a</span> <span class="atn">href</span>=<span class="atv">&quot;#&quot;</span> <span class="atn">class</span>=<span class="atv">&quot;disabled&quot;</span>&gt;
            Previous
        &lt;<span class="tag">/a</span>&gt;
    &lt;<span class="tag">/li</span>&gt;
    &lt;<span class="tag">li</span> <span class="atn">class</span>=<span class="atv">&quot;page-item active&quot;</span>&gt;
        &lt;<span class="tag">a</span> <span class="atn">href</span>=<span class="atv">&quot;#&quot;</span>&gt;
            1
        &lt;<span class="tag">/a</span>&gt;
    &lt;<span class="tag">/li</span>&gt;
    &lt;<span class="tag">li</span> <span class="atn">class</span>=<span class="atv">&quot;page-item&quot;</span>&gt;
        &lt;<span class="tag">a</span> <span class="atn">href</span>=<span class="atv">&quot;#&quot;</span>&gt;
            2
        &lt;<span class="tag">/a</span>&gt;
    &lt;<span class="tag">/li</span>&gt;
    &lt;<span class="tag">li</span> <span class="atn">class</span>=<span class="atv">&quot;page-item&quot;</span>&gt;
        &lt;<span class="tag">a</span> <span class="atn">href</span>=<span class="atv">&quot;#&quot;</span>&gt;
            3
        &lt;<span class="tag">/a</span>&gt;
    &lt;<span class="tag">/li</span>&gt;
    &lt;<span class="tag">li</span> <span class="atn">class</span>=<span class="atv">&quot;page-item&quot;</span>&gt;
        &lt;<span class="tag">span</span>&gt;...&lt;<span class="tag">/span</span>&gt;
    &lt;<span class="tag">/li</span>&gt;
    &lt;<span class="tag">li</span> <span class="atn">class</span>=<span class="atv">&quot;page-item&quot;</span>&gt;
        &lt;<span class="tag">a</span> <span class="atn">href</span>=<span class="atv">&quot;#&quot;</span>&gt;
            12
        &lt;<span class="tag">/a</span>&gt;
    &lt;<span class="tag">/li</span>&gt;
    &lt;<span class="tag">li</span> <span class="atn">class</span>=<span class="atv">&quot;page-item&quot;</span>&gt;
        &lt;<span class="tag">a</span> <span class="atn">href</span>=<span class="atv">&quot;#&quot;</span>&gt;
            Next
        &lt;<span class="tag">/a</span>&gt;
    &lt;<span class="tag">/li</span>&gt;
&lt;<span class="tag">/ul</span>&gt;
</pre>

        </section>

        <section id="modals" class="grid-960">
            <header class="text-center"><h4>modals</h4></header>
            <section class="notes">
                <p><strong>Modals</strong> are flexible dialog prompts.</p>
            </section>
            <div class="columns">
                <div class="column">
                    <div class="modal-temp">
                        <div class="modal-overlay"></div>
                        <div class="modal-container" role="document">
                            <div class="modal-header">
                                <button type="button" class="btn btn-clear float-right" aria-label="Close"></button>
                                <div class="modal-title">Modal title</div>
                            </div>
                            <div class="modal-body">
                                <div class="content">
                                    <p>
                                        This is the content inside the modal.
                                    </p>
                                    <h4>Lorem ipsum</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent risus leo, dictum in vehicula sit amet, feugiat tempus tellus. Duis quis sodales risus. Etiam euismod ornare consequat.</p>
                                    <p>Climb leg rub face on everything give attitude nap all day for under the bed. Chase mice attack feet but rub face on everything hopped up on goofballs.</p>
                                    <h4>Cupcake ipsum</h4>
                                    <p>Jelly-o sesame snaps halvah croissant oat cake cookie. Cheesecake bear claw topping. Chupa chups apple pie carrot cake chocolate cake caramels.</p>
                                    <p>De braaaiiiins apocalypsi gorger omero prefrontal cortex undead survivor fornix dictum mauris. Hi brains mindless mortuis limbic cortex soulless creaturas optic nerve.</p>
                                    <h4>Candy ipsum</h4>
                                    <p>Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas. Dramatically maintain clicks-and-mortar.</p>
                                    <p>Caerphilly swiss fromage frais. Brie cheese and wine fromage frais chalk and cheese danish fontina smelly cheese who moved my cheese cow.</p>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-link">Close</button>
                                <button class="btn btn-primary">Share</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section class="notes">
                <p>Add a container element with the class <code class="label">modal</code>. And add a real container <code class="label">modal-container</code> and overlay <code class="label">modal-overlay</code> inside it. You can add child elements with the class name <code class="label">modal-header</code>, <code class="label">modal-content</code> and <code class="label">modal-footer</code> - any or all of them. </p>
                <p>Spectre.css does not include JavaScript code, you will need to implement your JS to interact with modals. To make a modal appear, add the class <code class="label">active</code> to the <code class="label">modal</code> container</p>
            </section>

            <!-- modals example -->
<pre class="code lang-html">
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">&quot;modal active&quot;</span>&gt;
    &lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">&quot;modal-overlay&quot;</span>&gt;&lt;<span class="tag">/div</span>&gt;
    &lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">&quot;modal-container&quot;</span>&gt;
        &lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">&quot;modal-header&quot;</span>&gt;
            &lt;<span class="tag">button</span> <span class="atn">class</span>=<span class="atv">&quot;btn btn-clear float-right&quot;</span>&gt;&lt;<span class="tag">/button</span>&gt;
            &lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">&quot;modal-title&quot;</span>&gt;Modal title&lt;<span class="tag">/div</span>&gt;
        &lt;<span class="tag">/div</span>&gt;
        &lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">&quot;modal-body&quot;</span>&gt;
            &lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">&quot;content&quot;</span>&gt;
                <span class="com">&lt;!-- content here --&gt;</span>
            &lt;<span class="tag">/div</span>&gt;
        &lt;<span class="tag">/div</span>&gt;
        &lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">&quot;modal-footer&quot;</span>&gt;
            &lt;<span class="tag">button</span> <span class="atn">class</span>=<span class="atv">&quot;btn btn-link&quot;</span>&gt;Close&lt;<span class="tag">/button</span>&gt;
            &lt;<span class="tag">button</span> <span class="atn">class</span>=<span class="atv">&quot;btn btn-primary&quot;</span>&gt;Share&lt;<span class="tag">/button</span>&gt;
        &lt;<span class="tag">/div</span>&gt;
    &lt;<span class="tag">/div</span>&gt;
&lt;<span class="tag">/div</span>&gt;
</pre>

            <header class="text-center"><h5>modal sizes</h5></header>
            <div class="columns">
                <div class="column">
                    <div class="modal-temp modal-sm">
                        <div class="modal-overlay"></div>
                        <div class="modal-container" role="document">
                            <div class="modal-header">
                                <button type="button" class="btn btn-clear float-right" aria-label="Close"></button>
                                <div class="modal-title">Modal title</div>
                            </div>
                            <div class="modal-body">
                                <div class="content">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-link">Close</button>
                                <button class="btn btn-primary">Share</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="modal-temp modal-sm">
                        <div class="modal-overlay"></div>
                        <div class="modal-container" role="document">
                            <div class="modal-header">
                                <button type="button" class="btn btn-clear float-right" aria-label="Close"></button>
                                <div class="modal-title">Modal title</div>
                            </div>
                            <div class="modal-body">
                                <div class="content">
                                    <form>
                                        <div class="form-group">
                                            <label class="form-label" for="input-example-7">Name</label>
                                            <input class="form-input" type="text" id="input-example-7" placeholder="Name" />
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Gender</label>
                                            <label class="form-radio">
                                                <input type="radio" name="gender" />
                                                <i class="form-icon"></i> Male
                                            </label>
                                            <label class="form-radio">
                                                <input type="radio" name="gender" checked />
                                                <i class="form-icon"></i> Female
                                            </label>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-link">Close</button>
                                <button class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section class="notes">
                <p>Add the class <code class="label">modal-sm</code> for a smaller modal dialog. </p>
            </section>

            <!-- modals example -->
<pre class="code lang-html">
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">&quot;modal modal-sm&quot;</span>&gt;
    &lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">&quot;modal-overlay&quot;</span>&gt;&lt;<span class="tag">/div</span>&gt;
    &lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">&quot;modal-container&quot;</span>&gt;
        <span class="com">&lt;!-- modal structure here --&gt;</span>
    &lt;<span class="tag">/div</span>&gt;
&lt;<span class="tag">/div</span>&gt;
</pre>

        </section>

        <section id="cards" class="grid-960">
            <header class="text-center"><h4>cards</h4></header>
            <section class="notes">
                <p><strong>Cards</strong> are flexible content containers.</p>
            </section>
            <div class="columns">
                <div class="column col-4">
                    <div class="card">
                        <div class="card-image">
                            <img class="img-responsive" src="demo/img/osx-el-capitan.jpg" />
                        </div>
                        <div class="card-header">
                            <h4 class="card-title">Microsoft</h4>
                            <h6 class="card-meta">Software and hardware</h6>
                        </div>
                        <div class="card-body">
                            Empower every person and every organization on the planet to achieve more.
                        </div>
                        <div class="card-footer">
                            <a href="#" class="btn btn-primary">Do</a>
                        </div>
                    </div>
                </div>
                <div class="column col-4">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Apple</h4>
                            <h6 class="card-meta">Hardware and software</h6>
                        </div>
                        <div class="card-image">
                            <img class="img-responsive" src="demo/img/osx-yosemite.jpg" />
                        </div>
                        <div class="card-body">
                            To make a contribution to the world by making tools for the mind that advance humankind.
                        </div>
                        <div class="card-footer">
                            <div class="btn-group btn-group-block">
                                <button class="btn btn-primary">Buy</button>
                                <button class="btn">Buy</button>
                                <button class="btn">Buy</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column col-4">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Google</h4>
                            <h6 class="card-meta">Software and hardware</h6>
                        </div>
                        <div class="card-body">
                            Organize the world�s information and make it universally accessible and useful.
                        </div>
                        <div class="card-footer">
                            <a href="#" class="btn btn-primary">Ad</a>
                        </div>
                    </div>
                </div>
            </div>
            <section class="notes">
                <p>Add a container element with the class <code class="label">card</code>. And add child elements with the class name <code class="label">card-image</code>, <code class="label">card-header</code>, <code class="label">card-content</code> and/or <code class="label">card-footer</code>. The <code class="label">card-image</code> can be placed in any position. </p>
            </section>

            <!-- cards example -->
<pre class="code lang-html">
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">&quot;card&quot;</span>&gt;
    &lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">&quot;card-image&quot;</span>&gt;
        &lt;<span class="tag">img</span> <span class="atn">src</span>=<span class="atv">&quot;img/osx-el-capitan.jpg&quot;</span> <span class="atn">class</span>=<span class="atv">&quot;img-responsive&quot;</span> /&gt;
    &lt;<span class="tag">/div</span>&gt;
    &lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">&quot;card-header&quot;</span>&gt;
        &lt;<span class="tag">h4</span> <span class="atn">class</span>=<span class="atv">&quot;card-title&quot;</span>&gt;Microsoft&lt;<span class="tag">/h4</span>&gt;
        &lt;<span class="tag">h6</span> <span class="atn">class</span>=<span class="atv">&quot;card-meta&quot;</span>&gt;Software and hardware&lt;<span class="tag">/h6</span>&gt;
    &lt;<span class="tag">/div</span>&gt;
    &lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">&quot;card-body&quot;</span>&gt;
        To make a contribution to the world by making tools for the mind that advance humankind.
    &lt;<span class="tag">/div</span>&gt;
    &lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">&quot;card-footer&quot;</span>&gt;
        &lt;<span class="tag">button</span> <span class="atn">class</span>=<span class="atv">&quot;btn btn-primary&quot;</span>&gt;Do&lt;<span class="tag">/button</span>&gt;
    &lt;<span class="tag">/div</span>&gt;
&lt;<span class="tag">/div</span>&gt;
</pre>

        </section>

        <section id="utilities" class="grid-960">
            <section class="notes text-center">
                <ul class="tab inline-block">
                    <li class="tab-item">
                        <a href="#elements">
                            elements
                        </a>
                    </li>
                    <li class="tab-item">
                        <a href="#components">
                            components
                        </a>
                    </li>
                    <li class="tab-item active">
                        <a href="#utilities">
                            utilities
                        </a>
                    </li>
                </ul>
            </section>
            <section class="notes text-center">
                <div class="btn-group">
                    <a href="#position" class="btn btn-primary">position</a>
                    <a href="#display" class="btn btn-primary">display</a>
                    <a href="#text" class="btn btn-primary">text</a>
                    <a href="#shapes" class="btn btn-primary">shapes</a>
                    <a href="#loading" class="btn btn-primary">loading</a>
                </div>
            </section>
        </section>

        <section id="position" class="grid-960">
            <section class="notes">
                <p><strong>Position utilities</strong> are used for useful layout and position things, including clearfix, float, position and margin/padding utilities.</p>
            </section>

            <!-- position utilities example -->
<pre class="code lang-html">
<span class="com">&lt;!-- clear float --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">&quot;clearfix&quot;</span>&gt;&lt;<span class="tag">/div</span>&gt;
<span class="com">&lt;!-- float: left and right--&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">&quot;float-left&quot;</span>&gt;&lt;<span class="tag">/div</span>&gt;
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">&quot;float-right&quot;</span>&gt;&lt;<span class="tag">/div</span>&gt;
<span class="com">&lt;!-- position: relative, absolute and fixed--&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">&quot;rel&quot;</span>&gt;&lt;<span class="tag">/div</span>&gt;
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">&quot;abs&quot;</span>&gt;&lt;<span class="tag">/div</span>&gt;
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">&quot;fixed&quot;</span>&gt;&lt;<span class="tag">/div</span>&gt;
<span class="com">&lt;!-- centered block --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">&quot;centered&quot;</span>&gt;&lt;<span class="tag">/div</span>&gt;
<span class="com">&lt;!-- margin: 10px and 5px in 4 directions. mt-10 = margin-top: 10px; --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">&quot;mt-10&quot;</span>&gt;&lt;<span class="tag">/div</span>&gt;
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">&quot;mt-5&quot;</span>&gt;&lt;<span class="tag">/div</span>&gt;
<span class="com">&lt;!-- padding: 10px and 5px in 4 directions. pt-10 = padding-top: 10px; --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">&quot;pt-10&quot;</span>&gt;&lt;<span class="tag">/div</span>&gt;
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">&quot;pt-5&quot;</span>&gt;&lt;<span class="tag">/div</span>&gt;
</pre>

        </section>

        <section id="display" class="grid-960">
            <section class="notes">
                <p><strong>Display utilities</strong> are used for display and hidden things.</p>
            </section>

            <!-- display utilities example -->
<pre class="code lang-html">
<span class="com">&lt;!-- display: block; --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">&quot;block&quot;</span>&gt;&lt;<span class="tag">/div</span>&gt;
<span class="com">&lt;!-- display: inline; --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">&quot;inline&quot;</span>&gt;&lt;<span class="tag">/div</span>&gt;
<span class="com">&lt;!-- display: inline-block; --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">&quot;inline-block&quot;</span>&gt;&lt;<span class="tag">/div</span>&gt;
<span class="com">&lt;!-- display: flex; --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">&quot;flex&quot;</span>&gt;&lt;<span class="tag">/div</span>&gt;
<span class="com">&lt;!-- display: inline-flex; --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">&quot;inline-flex&quot;</span>&gt;&lt;<span class="tag">/div</span>&gt;
<span class="com">&lt;!-- display: none; --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">&quot;hide&quot;</span>&gt;&lt;<span class="tag">/div</span>&gt;
<span class="com">&lt;!-- visibility: visible; --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">&quot;visible&quot;</span>&gt;&lt;<span class="tag">/div</span>&gt;
<span class="com">&lt;!-- visibility: hidden; --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">&quot;invisible&quot;</span>&gt;&lt;<span class="tag">/div</span>&gt;
<span class="com">&lt;!-- hide text contents --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">&quot;text-hide&quot;</span>&gt;&lt;<span class="tag">/div</span>&gt;
</pre>

        </section>

        <section id="text" class="grid-960">
            <section class="notes">
                <p><strong>Text utilities</strong> are used for text alignment, styles and overflow things.</p>
            </section>

            <!-- text utilities example -->
<pre class="code lang-html">
<span class="com">&lt;!-- left-aligned text --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">&quot;text-left&quot;</span>&gt;&lt;<span class="tag">/div</span>&gt;
<span class="com">&lt;!-- center-aligned text --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">&quot;text-center&quot;</span>&gt;&lt;<span class="tag">/div</span>&gt;
<span class="com">&lt;!-- right-aligned text --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">&quot;text-right&quot;</span>&gt;&lt;<span class="tag">/div</span>&gt;
<span class="com">&lt;!-- justified text --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">&quot;text-justify&quot;</span>&gt;&lt;<span class="tag">/div</span>&gt;

<span class="com">&lt;!-- Lowercased text --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">&quot;text-lowercase&quot;</span>&gt;&lt;<span class="tag">/div</span>&gt;
<span class="com">&lt;!-- Uppercased text --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">&quot;text-uppercase&quot;</span>&gt;&lt;<span class="tag">/div</span>&gt;
<span class="com">&lt;!-- Capitalized text --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">&quot;text-capitalize&quot;</span>&gt;&lt;<span class="tag">/div</span>&gt;

<span class="com">&lt;!-- Normal weight text --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">&quot;text-normal&quot;</span>&gt;&lt;<span class="tag">/div</span>&gt;
<span class="com">&lt;!-- Bold text --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">&quot;text-bold&quot;</span>&gt;&lt;<span class="tag">/div</span>&gt;
<span class="com">&lt;!-- Italicized text --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">&quot;text-italic&quot;</span>&gt;&lt;<span class="tag">/div</span>&gt;

<span class="com">&lt;!-- Overflow behavior: display an ellipsis to represent clipped text --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">&quot;text-ellipsis&quot;</span>&gt;&lt;<span class="tag">/div</span>&gt;
<span class="com">&lt;!-- Overflow behavior: truncate the text --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">&quot;text-clip&quot;</span>&gt;&lt;<span class="tag">/div</span>&gt;
<span class="com">&lt;!-- Text may be broken at arbitrary points --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">&quot;text-break&quot;</span>&gt;&lt;<span class="tag">/div</span>&gt;
</pre>

        </section>

        <section id="shapes" class="grid-960">
            <section class="notes">
                <p><strong>Shape utilities</strong> are used for change element shapes.</p>
            </section>

            <!-- shape utilities example -->
<pre class="code lang-html">
<span class="com">&lt;!-- rounded element --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">&quot;rounded&quot;</span>&gt;&lt;<span class="tag">/div</span>&gt;
<span class="com">&lt;!-- circle element --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">&quot;circle&quot;</span>&gt;&lt;<span class="tag">/div</span>&gt;
</pre>

        </section>

        <section id="loading" class="grid-960">
            <section class="notes">
                <p><strong>Loading indicator</strong> is used for loading or updating. Also, you can add the class <code class="label">loading</code> to buttons for loading status.</p>
            </section>
            <div class="columns">
                <div class="column">
                    <div class="loading">Loading</div>
                </div>
            </div>
            <!-- loading example -->
<pre class="code lang-html">
<span class="com">&lt;!-- loading element --&gt;</span>
&lt;<span class="tag">div</span> <span class="atn">class</span>=<span class="atv">&quot;loading&quot;</span>&gt;&lt;<span class="tag">/div</span>&gt;
</pre>

        </section>
    </section>
    <footer class="bg-grey">
        <section id="copyright" class="grid-footer grid-960">
            <p>
                <a href="https://github.com/picturepan2/spectre" target="_blank">GitHub Repo</a> | <a href="#">Back to top</a> | version: 0.1.12
            </p>
            <p>Designed and built with love by <a href="https://twitter.com/picturepan2" target="_blank">Yan Zhu</a>. Licensed under the <a href="https://github.com/picturepan2/spectre/blob/master/LICENSE" target="_blank">MIT License</a>.</p>
        </section>
    </footer>
</body>
</html>