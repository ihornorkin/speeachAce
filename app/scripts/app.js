import $ from 'jquery';

const mainModule = (function () {
	let cachedDOM = {};

	const cacheDOM = function () {
		const self = {};

		/* self.nameElement = declaration */
		return self;
	};

/* Usage self element
	cachedDOM.nameElement and coding
*/

/* Initialisation function */

	const init = function () {
		cachedDOM = cacheDOM();
		// functionName();
	};
	return {
		init
	};
})();

/* Start script */
$(document).ready(function () {
	mainModule.init();
});
