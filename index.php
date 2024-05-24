<?php
	if (isset($_GET['theme'])) {
		$theme = htmlspecialchars($_GET['theme']);
	} else {
		$theme = "tylxr";
	}
?>
<!doctype html>
<!-- 
	tthelper v2 - https://github.com/tylxr59/tthelper
	Licensed w/ MIT License (see LICENSE for full text)
	
	CSS framework based off a highly modified Bootstrap - https://github.com/twbs/bootstrap
	Also licensed under the MIT License
-->
<html lang="en" class="h-100" data-tt-theme="<?PHP echo $theme; ?>">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="title" content="Ticket Helper">
	<meta name="description" content="Minimalist ticket helper for people in tech support">
	<meta name="author" content="https://github.com/tylxr59/tthelper">
	<title>Ticket Helper</title>

	<style>
		:root,
		[data-tt-theme=light] {
			--tt-font-sans-serif: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", "Noto Sans", "Liberation Sans", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
			--tt-font-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
			--tt-body-font-family: var(--tt-font-sans-serif);
			--tt-body-font-size: 1rem;
			--tt-body-font-weight: 400;
			--tt-body-line-height: 1.5;
			--tt-body-color: #212529;
			--tt-body-bg: #fff;
			--tt-tertiary-bg: #f8f9fa;
			--tt-link-color: #0d6efd;
			--tt-link-decoration: underline;
			--tt-border-width: 1px;
			--tt-border-style: solid;
			--tt-border-color: #dee2e6;
			--tt-border-radius: 0.375rem;
			--tt-btn-color: #fff;
			--tt-btn-hover-color: #fff;
			--tt-btn-focus-shadow-rgb: 49, 132, 253;
			--tt-btn-active-color: #fff;
			--tt-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);

			--tt-btn-clear-bg: #6c757d;
			--tt-btn-clear-color: #fff;
			--tt-btn-clear-border-color: #6c757d;
			--tt-btn-clear-hover-bg: #5c636a;
			--tt-btn-clear-hover-color: #fff;
			--tt-btn-clear-hover-border-color: #565e64;
			--tt-btn-clear-active-bg: #565e64;
			--tt-btn-clear-active-color: #fff;
			--tt-btn-clear-active-border-color: #51585e;

			--tt-btn-dsp-bg: #dc3545;
			--tt-btn-dsp-color: #fff;
			--tt-btn-dsp-border-color: #dc3545;
			--tt-btn-dsp-hover-bg: #bb2d3b;
			--tt-btn-dsp-hover-color: #fff;
			--tt-btn-dsp-hover-border-color: #b02a37;
			--tt-btn-dsp-active-bg: #b02a37;
			--tt-btn-dsp-active-color: #fff;
			--tt-btn-dsp-active-border-color: #a52834;

			--tt-btn-copy-bg: #0d6efd;
			--tt-btn-copy-color: #fff;
			--tt-btn-copy-border-color: #0d6efd;
			--tt-btn-copy-hover-bg: #0b5ed7;
			--tt-btn-copy-hover-color: #fff;
			--tt-btn-copy-hover-border-color: #0a58ca;
			--tt-btn-copy-active-bg: #0a58ca;
			--tt-btn-copy-active-color: #fff;
			--tt-btn-copy-active-border-color: #0a53be;
		}

		[data-tt-theme=dark] {
			color-scheme: dark;
			--tt-font-sans-serif: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", "Noto Sans", "Liberation Sans", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
			--tt-font-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
			--tt-body-font-family: var(--tt-font-sans-serif);
			--tt-body-font-size: 1rem;
			--tt-body-font-weight: 400;
			--tt-body-line-height: 1.5;
			--tt-body-color: #dee2e6;
			--tt-body-bg: #212529;
			--tt-tertiary-bg: #2b3035;
			--tt-link-color: #6ea8fe;
			--tt-link-decoration: underline;
			--tt-border-width: 1px;
			--tt-border-style: solid;
			--tt-border-color: #495057;
			--tt-border-radius: 0.375rem;
			--tt-form-valid-color: #75b798;
			--tt-btn-color: #fff;
			--tt-btn-hover-color: #fff;
			--tt-btn-focus-shadow-rgb: 49, 132, 253;
			--tt-btn-active-color: #fff;
			--tt-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);

			--tt-btn-clear-bg: #6c757d;
			--tt-btn-clear-color: #fff;
			--tt-btn-clear-border-color: #6c757d;
			--tt-btn-clear-hover-bg: #5c636a;
			--tt-btn-clear-hover-color: #fff;
			--tt-btn-clear-hover-border-color: #565e64;
			--tt-btn-clear-active-bg: #565e64;
			--tt-btn-clear-active-color: #fff;
			--tt-btn-clear-active-border-color: #51585e;

			--tt-btn-dsp-bg: #dc3545;
			--tt-btn-dsp-color: #fff;
			--tt-btn-dsp-border-color: #dc3545;
			--tt-btn-dsp-hover-bg: #bb2d3b;
			--tt-btn-dsp-hover-color: #fff;
			--tt-btn-dsp-hover-border-color: #b02a37;
			--tt-btn-dsp-active-bg: #b02a37;
			--tt-btn-dsp-active-color: #fff;
			--tt-btn-dsp-active-border-color: #a52834;

			--tt-btn-copy-bg: #0d6efd;
			--tt-btn-copy-color: #fff;
			--tt-btn-copy-border-color: #0d6efd;
			--tt-btn-copy-hover-bg: #0b5ed7;
			--tt-btn-copy-hover-color: #fff;
			--tt-btn-copy-hover-border-color: #0a58ca;
			--tt-btn-copy-active-bg: #0a58ca;
			--tt-btn-copy-active-color: #fff;
			--tt-btn-copy-active-border-color: #0a53be;
		}

		[data-tt-theme=tylxr] {
			color-scheme: dark;
			--tt-body-font-family: monospace;
			--tt-body-font-size: 1rem;
			--tt-body-font-weight: 400;
			--tt-body-line-height: 1.5;
			--tt-body-color: #fdf9f3;
			--tt-body-bg: #262626;
			--tt-tertiary-bg: #5b5b5b;
			--tt-link-color: #B9ADF5;
			--tt-link-decoration: none;
			--tt-border-width: 1px;
			--tt-border-style: solid;
			--tt-border-color: #5b5b5b;
			--tt-border-radius: 0.375rem;
			--tt-btn-color: #fff;
			--tt-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);

			--tt-btn-clear-bg: #262626;
			--tt-btn-clear-color: #ab9df2;
			--tt-btn-clear-border-color: #ab9df2;
			--tt-btn-clear-hover-bg: #ab9df2;
			--tt-btn-clear-hover-color: #262626;
			--tt-btn-clear-hover-border-color: #ab9df2;
			--tt-btn-clear-active-bg: #565e64;
			--tt-btn-clear-active-color: #fff;
			--tt-btn-clear-active-border-color: #51585e;

			--tt-btn-dsp-bg: #262626;
			--tt-btn-dsp-color: #ccc5f0;
			--tt-btn-dsp-border-color: #ccc5f0;
			--tt-btn-dsp-hover-bg: #ccc5f0;
			--tt-btn-dsp-hover-color: #262626;
			--tt-btn-dsp-hover-border-color: #ccc5f0;
			--tt-btn-dsp-active-bg: #565e64;
			--tt-btn-dsp-active-color: #fff;
			--tt-btn-dsp-active-border-color: #51585e;

			--tt-btn-copy-bg: #262626;
			--tt-btn-copy-color: #eee;
			--tt-btn-copy-border-color: #eee;
			--tt-btn-copy-hover-bg: #eee;
			--tt-btn-copy-hover-color: #262626;
			--tt-btn-copy-hover-border-color: #eee;
			--tt-btn-copy-active-bg: #565e64;
			--tt-btn-copy-active-color: #fff;
			--tt-btn-copy-active-border-color: #51585e;
		}

		body {
			overflow: hidden;
			margin: 0;
			font-family: var(--tt-body-font-family);
			font-size: var(--tt-body-font-size);
			font-weight: var(--tt-body-font-weight);
			line-height: var(--tt-body-line-height);
			color: var(--tt-body-color);
			background-color: var(--tt-body-bg);
			-webkit-text-size-adjust: 100%;
			-webkit-tap-highlight-color: rgba(0, 0, 0, 0);
		}

		a {
			color: var(--tt-link-color);
			text-decoration: var(--tt-link-decoration);
		}

		.container {
			margin-top: 0.5rem;
			padding-right: 0.75rem;
			padding-left: 0.75rem;
			margin-right: auto;
			margin-left: auto;
		}

		label {
			display: inline-block;
		}

		.form-label {
			margin-bottom: 0.5rem;
		}

		.input-group {
			position: relative;
			display: flex;
			flex-wrap: wrap;
			align-items: stretch;
			width: 100%;
			margin-bottom: 0.5rem;
		}

		.input-group>.form-control,
		.input-group>.form-select,
		.input-group>.form-floating {
			position: relative;
			flex: 1 1 auto;
			width: 1%;
			min-width: 0;
		}

		.input-group>.form-control:focus,
		.input-group>.form-select:focus,
		.input-group>.form-floating:focus-within {
			z-index: 5;
		}

		.input-group .btn {
			position: relative;
			z-index: 2;
		}

		.input-group .btn:focus {
			z-index: 5;
		}

		.input-group-text {
			display: flex;
			align-items: center;
			padding: 0.375rem 0.75rem;
			font-size: 1rem;
			font-weight: 400;
			line-height: 1.5;
			color: var(--tt-body-color);
			text-align: center;
			white-space: nowrap;
			background-color: var(--tt-tertiary-bg);
			border: 1px var(--tt-border-style) var(--tt-border-color);
			border-radius: 0.5rem;
		}

		.input-group> :not(:first-child) {
			margin-left: calc(var(--tt-border-width) * -1);
			border-top-left-radius: 0;
			border-bottom-left-radius: 0;
		}

		.tt-buttons {
			text-align: center !important;
			margin-top: 1rem;
		}

		input,
		button,
		select,
		optgroup,
		textarea {
			margin: 0;
			font-family: inherit;
			font-size: inherit;
			line-height: inherit;
		}

		#troubleInfo {
			height: 350px;
		}

		#miscInfo {
			height: 200px;
		}

		.input-group-text {
			display: flex;
			align-items: center;
			padding: 0.375rem 0.75rem;
			font-size: 1rem;
			font-weight: 400;
			line-height: 1.5;
			color: var(--tt-body-color);
			text-align: center;
			white-space: nowrap;
			background-color: var(--tt-tertiary-bg);
			border: var(--tt-border-width) var(--tt-border-style) var(--tt-border-color);
			border-radius: var(--tt-border-radius);
		}

		.input {
			background-color: var(--tt-body-bg);
			color: var(--tt-body-color);
			border-top-left-radius: 0.375rem;
			border-bottom-left-radius: 0.375rem;
			border: var(--tt-border-width) var(--tt-border-style) var(--tt-border-color);
		}

		button {
			border-radius: 0;
		}

		.btn {
			--tt-btn-padding-x: 0.75rem;
			--tt-btn-padding-y: 0.375rem;
			--tt-btn-font-size: 1rem;
			--tt-btn-font-weight: 400;
			--tt-btn-line-height: 1.5;
			--tt-btn-color: var(--tt-body-color);
			--tt-btn-bg: transparent;
			--tt-btn-border-width: var(--tt-border-width);
			--tt-btn-border-color: transparent;
			--tt-btn-border-radius: var(--tt-border-radius);
			--tt-btn-hover-border-color: transparent;
			--tt-btn-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.15), 0 1px 1px rgba(0, 0, 0, 0.075);
			--tt-btn-disabled-opacity: 0.65;
			--tt-btn-focus-box-shadow: 0 0 0 0.25rem rgba(var(--tt-btn-focus-shadow-rgb), .5);
			display: inline-block;
			padding: var(--tt-btn-padding-y) var(--tt-btn-padding-x);
			font-family: var(--tt-body-font-family);
			font-size: var(--tt-btn-font-size);
			font-weight: var(--tt-btn-font-weight);
			line-height: var(--tt-btn-line-height);
			color: var(--tt-btn-color);
			text-align: center;
			text-decoration: none;
			vertical-align: middle;
			cursor: pointer;
			-webkit-user-select: none;
			-moz-user-select: none;
			user-select: none;
			border: var(--tt-btn-border-width) solid var(--tt-btn-border-color);
			border-radius: var(--tt-btn-border-radius);
			background-color: var(--tt-btn-bg);
			transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
		}

		.btn:hover {
			color: var(--tt-btn-hover-color);
			background-color: var(--tt-btn-hover-bg);
			border-color: var(--tt-btn-hover-border-color);
		}

		.btn-check+.btn:hover {
			color: var(--tt-btn-color);
			background-color: var(--tt-btn-bg);
			border-color: var(--tt-btn-border-color);
		}

		.btn:focus-visible {
			color: var(--tt-btn-hover-color);
			background-color: var(--tt-btn-hover-bg);
			border-color: var(--tt-btn-hover-border-color);
			outline: 0;
			box-shadow: var(--tt-btn-focus-box-shadow);
		}

		.btn-check:focus-visible+.btn {
			border-color: var(--tt-btn-hover-border-color);
			outline: 0;
			box-shadow: var(--tt-btn-focus-box-shadow);
		}

		.btn-check:checked+.btn,
		:not(.btn-check)+.btn:active,
		.btn:first-child:active,
		.btn.active,
		.btn.show {
			color: var(--tt-btn-active-color);
			background-color: var(--tt-btn-active-bg);
			border-color: var(--tt-btn-active-border-color);
		}

		.btn-check:checked+.btn:focus-visible,
		:not(.btn-check)+.btn:active:focus-visible,
		.btn:first-child:active:focus-visible,
		.btn.active:focus-visible,
		.btn.show:focus-visible {
			box-shadow: var(--tt-btn-focus-box-shadow);
		}

		.btn-check:checked:focus-visible+.btn {
			box-shadow: var(--tt-btn-focus-box-shadow);
		}

		.btn-copy {
			--tt-btn-bg: var(--tt-btn-copy-bg);
			--tt-btn-color: var(--tt-btn-copy-color);
			--tt-btn-border-color: var(--tt-btn-copy-border-color);
			--tt-btn-hover-bg: var(--tt-btn-copy-hover-bg);
			--tt-btn-hover-color: var(--tt-btn-copy-hover-color);
			--tt-btn-hover-border-color: var(--tt-btn-copy-hover-border-color);
			--tt-btn-active-bg: var(--tt-btn-copy-active-bg);
			--tt-btn-active-color: var(--tt-btn-copy-active-color);
			--tt-btn-active-border-color: var(--tt-btn-copy-active-border-color);
		}

		.btn-clear {
			--tt-btn-bg: var(--tt-btn-clear-bg);
			--tt-btn-color: var(--tt-btn-clear-color);
			--tt-btn-border-color: var(--tt-btn-clear-border-color);
			--tt-btn-hover-bg: var(--tt-btn-clear-hover-bg);
			--tt-btn-hover-color: var(--tt-btn-clear-hover-color);
			--tt-btn-hover-border-color: var(--tt-btn-clear-hover-border-color);
			--tt-btn-active-bg: var(--tt-btn-clear-active-bg);
			--tt-btn-active-color: var(--tt-btn-clear-active-color);
			--tt-btn-active-border-color: var(--tt-btn-clear-active-border-color);
		}

		.btn-dsp {
			--tt-btn-bg: var(--tt-btn-dsp-bg);
			--tt-btn-color: var(--tt-btn-dsp-color);
			--tt-btn-border-color: var(--tt-btn-dsp-border-color);
			--tt-btn-hover-bg: var(--tt-btn-dsp-hover-bg);
			--tt-btn-hover-color: var(--tt-btn-dsp-hover-color);
			--tt-btn-hover-border-color: var(--tt-btn-dsp-hover-border-color);
			--tt-btn-active-bg: var(--tt-btn-dsp-active-bg);
			--tt-btn-active-color: var(--tt-btn-dsp-active-color);
			--tt-btn-active-border-color: var(--tt-btn-dsp-active-border-color);
		}
	</style>
</head>

<body>
	<div class="container">
		<label for="callerName" class="form-label">Caller Name</label>
		<div class="input-group mb-3">
			<input type="text" class="form-control input" id="callerName">
			<span class="input-group-text" id="callerNameAddon"><a href="#"
					onClick="copy('callerName');">Copy</a></span>
		</div>

		<label for="callerCBN" class="form-label">Call Back Number</label>
		<div class="input-group mb-3">
			<input type="text" class="form-control input" id="callerCBN">
			<span class="input-group-text" id="callerCBNAddon"><a href="#" onClick="copy('callerCBN');">Copy</a></span>
		</div>

		<label for="acctInfo" class="form-label">Account/Ticket/Agreement Number</label>
		<div class="input-group mb-3">
			<input type="text" class="form-control input" id="acctInfo">
			<span class="input-group-text" id="acctInfoAddon"><a href="#" onClick="copy('acctInfo');">Copy</a></span>
		</div>

		<label for="troubleInfo" class="form-label">Description of Issue</label>
		<div class="input-group mb-3">
			<textarea type="text" class="form-control input" id="troubleInfo"></textarea>
			<span class="input-group-text" id="troubleInfoAddon"><a href="#"
					onClick="copy('troubleInfo');">Copy</a></span>
		</div>

		<label for="miscInfo" class="form-label">Additional Info</label>
		<div class="input-group mb-3">
			<textarea type="text" class="form-control input" id="miscInfo"></textarea>
			<span class="input-group-text" id="miscInfoAddon"><a href="#" onClick="copy('miscInfo');">Copy</a></span>
		</div>

		<div class="tt-buttons">
			<button type="button" class="btn btn-clear" onClick="clearAll();">Clear All</button>
			<button type="button" class="btn btn-dsp" onClick="copyTT(true);">Dispatch</button>
			<button type="button" class="btn btn-copy" onClick="copyTT(false);">Copy All</button>
		</div>
	</div>


	<script>
		const dspPrereqs = "Dispatching - Confirmed no sick or quarantined at location. Advised of possible charge. Advised of 24 to 48 hour window for dispatch.";
		const callerName = document.getElementById('callerName');
		const callerCBN = document.getElementById('callerCBN');
		const acctInfo = document.getElementById('acctInfo');
		const troubleInfo = document.getElementById('troubleInfo');
		const miscInfo = document.getElementById('miscInfo');

		function copy(x) {
			var content = document.getElementById(x);
			content.select();
			document.execCommand('copy');
		}

		function copyTT(dispatch) {
			var content = callerName.value + " / " + callerCBN.value + "\n\n" + troubleInfo.value;

			if (dispatch) {
				content = content + "\n\n" + dspPrereqs;
			}
			navigator.clipboard.writeText(content);
		}
		function clearAll() {
			callerName.value = "";
			callerCBN.value = "";
			acctInfo.value = "";
			troubleInfo.value = "";
			miscInfo.value = "";
		}
	</script>
</body>

</html>