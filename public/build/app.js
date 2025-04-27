"use strict";
(self["webpackChunkgolden_touch_symfony"] = self["webpackChunkgolden_touch_symfony"] || []).push([["app"],{

/***/ "./assets/app.js":
/*!***********************!*\
  !*** ./assets/app.js ***!
  \***********************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _bootstrap_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./bootstrap.js */ "./assets/bootstrap.js");
/* harmony import */ var chart_js_auto__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! chart.js/auto */ "./node_modules/chart.js/auto/auto.js");
/* harmony import */ var chartjs_adapter_date_fns__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! chartjs-adapter-date-fns */ "./node_modules/chartjs-adapter-date-fns/dist/chartjs-adapter-date-fns.esm.js");
/* harmony import */ var date_fns_locale__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! date-fns/locale */ "./node_modules/date-fns/locale/fr.js");
/* harmony import */ var _controllers_dashboard_controller__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./controllers/dashboard_controller */ "./assets/controllers/dashboard_controller.js");


// Import Chart.js




// Configure Chart.js defaults
chart_js_auto__WEBPACK_IMPORTED_MODULE_1__.Chart.defaults.locale = date_fns_locale__WEBPACK_IMPORTED_MODULE_3__.fr;
chart_js_auto__WEBPACK_IMPORTED_MODULE_1__.Chart.defaults.responsive = true;
chart_js_auto__WEBPACK_IMPORTED_MODULE_1__.Chart.defaults.maintainAspectRatio = false;

// Import Stimulus controllers

console.log('This log comes from assets/app.js - welcome to AssetMapper! ');

/***/ }),

/***/ "./assets/bootstrap.js":
/*!*****************************!*\
  !*** ./assets/bootstrap.js ***!
  \*****************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _symfony_stimulus_bundle__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @symfony/stimulus-bundle */ "./node_modules/@symfony/stimulus-bundle/dist/loader.js");

var app = (0,_symfony_stimulus_bundle__WEBPACK_IMPORTED_MODULE_0__.startStimulusApp)();
// register any custom, 3rd party controllers here
// app.register('some_controller_name', SomeImportedController);

/***/ }),

/***/ "./assets/controllers/dashboard_controller.js":
/*!****************************************************!*\
  !*** ./assets/controllers/dashboard_controller.js ***!
  \****************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ _default)
/* harmony export */ });
/* harmony import */ var core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/es.symbol.js */ "./node_modules/core-js/modules/es.symbol.js");
/* harmony import */ var core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/es.symbol.description.js */ "./node_modules/core-js/modules/es.symbol.description.js");
/* harmony import */ var core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_description_js__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! core-js/modules/es.symbol.iterator.js */ "./node_modules/core-js/modules/es.symbol.iterator.js");
/* harmony import */ var core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_iterator_js__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var core_js_modules_es_symbol_to_primitive_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! core-js/modules/es.symbol.to-primitive.js */ "./node_modules/core-js/modules/es.symbol.to-primitive.js");
/* harmony import */ var core_js_modules_es_symbol_to_primitive_js__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_to_primitive_js__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var core_js_modules_es_error_cause_js__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! core-js/modules/es.error.cause.js */ "./node_modules/core-js/modules/es.error.cause.js");
/* harmony import */ var core_js_modules_es_error_cause_js__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_error_cause_js__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var core_js_modules_es_error_to_string_js__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! core-js/modules/es.error.to-string.js */ "./node_modules/core-js/modules/es.error.to-string.js");
/* harmony import */ var core_js_modules_es_error_to_string_js__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_error_to_string_js__WEBPACK_IMPORTED_MODULE_5__);
/* harmony import */ var core_js_modules_es_array_concat_js__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! core-js/modules/es.array.concat.js */ "./node_modules/core-js/modules/es.array.concat.js");
/* harmony import */ var core_js_modules_es_array_concat_js__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_concat_js__WEBPACK_IMPORTED_MODULE_6__);
/* harmony import */ var core_js_modules_es_array_for_each_js__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! core-js/modules/es.array.for-each.js */ "./node_modules/core-js/modules/es.array.for-each.js");
/* harmony import */ var core_js_modules_es_array_for_each_js__WEBPACK_IMPORTED_MODULE_7___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_for_each_js__WEBPACK_IMPORTED_MODULE_7__);
/* harmony import */ var core_js_modules_es_array_includes_js__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! core-js/modules/es.array.includes.js */ "./node_modules/core-js/modules/es.array.includes.js");
/* harmony import */ var core_js_modules_es_array_includes_js__WEBPACK_IMPORTED_MODULE_8___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_includes_js__WEBPACK_IMPORTED_MODULE_8__);
/* harmony import */ var core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! core-js/modules/es.array.iterator.js */ "./node_modules/core-js/modules/es.array.iterator.js");
/* harmony import */ var core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_9___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_iterator_js__WEBPACK_IMPORTED_MODULE_9__);
/* harmony import */ var core_js_modules_es_array_map_js__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! core-js/modules/es.array.map.js */ "./node_modules/core-js/modules/es.array.map.js");
/* harmony import */ var core_js_modules_es_array_map_js__WEBPACK_IMPORTED_MODULE_10___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_map_js__WEBPACK_IMPORTED_MODULE_10__);
/* harmony import */ var core_js_modules_es_array_push_js__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! core-js/modules/es.array.push.js */ "./node_modules/core-js/modules/es.array.push.js");
/* harmony import */ var core_js_modules_es_array_push_js__WEBPACK_IMPORTED_MODULE_11___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_push_js__WEBPACK_IMPORTED_MODULE_11__);
/* harmony import */ var core_js_modules_es_array_reverse_js__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! core-js/modules/es.array.reverse.js */ "./node_modules/core-js/modules/es.array.reverse.js");
/* harmony import */ var core_js_modules_es_array_reverse_js__WEBPACK_IMPORTED_MODULE_12___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_reverse_js__WEBPACK_IMPORTED_MODULE_12__);
/* harmony import */ var core_js_modules_es_array_slice_js__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(/*! core-js/modules/es.array.slice.js */ "./node_modules/core-js/modules/es.array.slice.js");
/* harmony import */ var core_js_modules_es_array_slice_js__WEBPACK_IMPORTED_MODULE_13___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_slice_js__WEBPACK_IMPORTED_MODULE_13__);
/* harmony import */ var core_js_modules_es_date_to_primitive_js__WEBPACK_IMPORTED_MODULE_14__ = __webpack_require__(/*! core-js/modules/es.date.to-primitive.js */ "./node_modules/core-js/modules/es.date.to-primitive.js");
/* harmony import */ var core_js_modules_es_date_to_primitive_js__WEBPACK_IMPORTED_MODULE_14___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_date_to_primitive_js__WEBPACK_IMPORTED_MODULE_14__);
/* harmony import */ var core_js_modules_es_function_bind_js__WEBPACK_IMPORTED_MODULE_15__ = __webpack_require__(/*! core-js/modules/es.function.bind.js */ "./node_modules/core-js/modules/es.function.bind.js");
/* harmony import */ var core_js_modules_es_function_bind_js__WEBPACK_IMPORTED_MODULE_15___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_function_bind_js__WEBPACK_IMPORTED_MODULE_15__);
/* harmony import */ var core_js_modules_es_function_name_js__WEBPACK_IMPORTED_MODULE_16__ = __webpack_require__(/*! core-js/modules/es.function.name.js */ "./node_modules/core-js/modules/es.function.name.js");
/* harmony import */ var core_js_modules_es_function_name_js__WEBPACK_IMPORTED_MODULE_16___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_function_name_js__WEBPACK_IMPORTED_MODULE_16__);
/* harmony import */ var core_js_modules_es_number_constructor_js__WEBPACK_IMPORTED_MODULE_17__ = __webpack_require__(/*! core-js/modules/es.number.constructor.js */ "./node_modules/core-js/modules/es.number.constructor.js");
/* harmony import */ var core_js_modules_es_number_constructor_js__WEBPACK_IMPORTED_MODULE_17___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_number_constructor_js__WEBPACK_IMPORTED_MODULE_17__);
/* harmony import */ var core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_18__ = __webpack_require__(/*! core-js/modules/es.object.create.js */ "./node_modules/core-js/modules/es.object.create.js");
/* harmony import */ var core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_18___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_create_js__WEBPACK_IMPORTED_MODULE_18__);
/* harmony import */ var core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_19__ = __webpack_require__(/*! core-js/modules/es.object.define-property.js */ "./node_modules/core-js/modules/es.object.define-property.js");
/* harmony import */ var core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_19___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_define_property_js__WEBPACK_IMPORTED_MODULE_19__);
/* harmony import */ var core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_20__ = __webpack_require__(/*! core-js/modules/es.object.get-prototype-of.js */ "./node_modules/core-js/modules/es.object.get-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_20___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_get_prototype_of_js__WEBPACK_IMPORTED_MODULE_20__);
/* harmony import */ var core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_21__ = __webpack_require__(/*! core-js/modules/es.object.set-prototype-of.js */ "./node_modules/core-js/modules/es.object.set-prototype-of.js");
/* harmony import */ var core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_21___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_set_prototype_of_js__WEBPACK_IMPORTED_MODULE_21__);
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_22__ = __webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_22___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_22__);
/* harmony import */ var core_js_modules_es_promise_js__WEBPACK_IMPORTED_MODULE_23__ = __webpack_require__(/*! core-js/modules/es.promise.js */ "./node_modules/core-js/modules/es.promise.js");
/* harmony import */ var core_js_modules_es_promise_js__WEBPACK_IMPORTED_MODULE_23___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_promise_js__WEBPACK_IMPORTED_MODULE_23__);
/* harmony import */ var core_js_modules_es_reflect_construct_js__WEBPACK_IMPORTED_MODULE_24__ = __webpack_require__(/*! core-js/modules/es.reflect.construct.js */ "./node_modules/core-js/modules/es.reflect.construct.js");
/* harmony import */ var core_js_modules_es_reflect_construct_js__WEBPACK_IMPORTED_MODULE_24___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_reflect_construct_js__WEBPACK_IMPORTED_MODULE_24__);
/* harmony import */ var core_js_modules_es_string_includes_js__WEBPACK_IMPORTED_MODULE_25__ = __webpack_require__(/*! core-js/modules/es.string.includes.js */ "./node_modules/core-js/modules/es.string.includes.js");
/* harmony import */ var core_js_modules_es_string_includes_js__WEBPACK_IMPORTED_MODULE_25___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_string_includes_js__WEBPACK_IMPORTED_MODULE_25__);
/* harmony import */ var core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_26__ = __webpack_require__(/*! core-js/modules/es.string.iterator.js */ "./node_modules/core-js/modules/es.string.iterator.js");
/* harmony import */ var core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_26___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_string_iterator_js__WEBPACK_IMPORTED_MODULE_26__);
/* harmony import */ var core_js_modules_esnext_iterator_constructor_js__WEBPACK_IMPORTED_MODULE_27__ = __webpack_require__(/*! core-js/modules/esnext.iterator.constructor.js */ "./node_modules/core-js/modules/esnext.iterator.constructor.js");
/* harmony import */ var core_js_modules_esnext_iterator_constructor_js__WEBPACK_IMPORTED_MODULE_27___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_esnext_iterator_constructor_js__WEBPACK_IMPORTED_MODULE_27__);
/* harmony import */ var core_js_modules_esnext_iterator_for_each_js__WEBPACK_IMPORTED_MODULE_28__ = __webpack_require__(/*! core-js/modules/esnext.iterator.for-each.js */ "./node_modules/core-js/modules/esnext.iterator.for-each.js");
/* harmony import */ var core_js_modules_esnext_iterator_for_each_js__WEBPACK_IMPORTED_MODULE_28___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_esnext_iterator_for_each_js__WEBPACK_IMPORTED_MODULE_28__);
/* harmony import */ var core_js_modules_esnext_iterator_map_js__WEBPACK_IMPORTED_MODULE_29__ = __webpack_require__(/*! core-js/modules/esnext.iterator.map.js */ "./node_modules/core-js/modules/esnext.iterator.map.js");
/* harmony import */ var core_js_modules_esnext_iterator_map_js__WEBPACK_IMPORTED_MODULE_29___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_esnext_iterator_map_js__WEBPACK_IMPORTED_MODULE_29__);
/* harmony import */ var core_js_modules_web_dom_collections_for_each_js__WEBPACK_IMPORTED_MODULE_30__ = __webpack_require__(/*! core-js/modules/web.dom-collections.for-each.js */ "./node_modules/core-js/modules/web.dom-collections.for-each.js");
/* harmony import */ var core_js_modules_web_dom_collections_for_each_js__WEBPACK_IMPORTED_MODULE_30___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_dom_collections_for_each_js__WEBPACK_IMPORTED_MODULE_30__);
/* harmony import */ var core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_31__ = __webpack_require__(/*! core-js/modules/web.dom-collections.iterator.js */ "./node_modules/core-js/modules/web.dom-collections.iterator.js");
/* harmony import */ var core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_31___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_dom_collections_iterator_js__WEBPACK_IMPORTED_MODULE_31__);
/* harmony import */ var core_js_modules_web_timers_js__WEBPACK_IMPORTED_MODULE_32__ = __webpack_require__(/*! core-js/modules/web.timers.js */ "./node_modules/core-js/modules/web.timers.js");
/* harmony import */ var core_js_modules_web_timers_js__WEBPACK_IMPORTED_MODULE_32___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_timers_js__WEBPACK_IMPORTED_MODULE_32__);
/* harmony import */ var _hotwired_stimulus__WEBPACK_IMPORTED_MODULE_33__ = __webpack_require__(/*! @hotwired/stimulus */ "./node_modules/@hotwired/stimulus/dist/stimulus.js");
/* harmony import */ var chart_js_auto__WEBPACK_IMPORTED_MODULE_34__ = __webpack_require__(/*! chart.js/auto */ "./node_modules/chart.js/auto/auto.js");
/* harmony import */ var gsap__WEBPACK_IMPORTED_MODULE_37__ = __webpack_require__(/*! gsap */ "./node_modules/gsap/index.js");
/* harmony import */ var aos__WEBPACK_IMPORTED_MODULE_35__ = __webpack_require__(/*! aos */ "./node_modules/aos/dist/aos.js");
/* harmony import */ var aos__WEBPACK_IMPORTED_MODULE_35___default = /*#__PURE__*/__webpack_require__.n(aos__WEBPACK_IMPORTED_MODULE_35__);
/* harmony import */ var sweetalert2__WEBPACK_IMPORTED_MODULE_36__ = __webpack_require__(/*! sweetalert2 */ "./node_modules/sweetalert2/dist/sweetalert2.all.js");
/* harmony import */ var sweetalert2__WEBPACK_IMPORTED_MODULE_36___default = /*#__PURE__*/__webpack_require__.n(sweetalert2__WEBPACK_IMPORTED_MODULE_36__);
function _typeof(o) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (o) { return typeof o; } : function (o) { return o && "function" == typeof Symbol && o.constructor === Symbol && o !== Symbol.prototype ? "symbol" : typeof o; }, _typeof(o); }
function _regeneratorRuntime() { "use strict"; /*! regenerator-runtime -- Copyright (c) 2014-present, Facebook, Inc. -- license (MIT): https://github.com/facebook/regenerator/blob/main/LICENSE */ _regeneratorRuntime = function _regeneratorRuntime() { return e; }; var t, e = {}, r = Object.prototype, n = r.hasOwnProperty, o = Object.defineProperty || function (t, e, r) { t[e] = r.value; }, i = "function" == typeof Symbol ? Symbol : {}, a = i.iterator || "@@iterator", c = i.asyncIterator || "@@asyncIterator", u = i.toStringTag || "@@toStringTag"; function define(t, e, r) { return Object.defineProperty(t, e, { value: r, enumerable: !0, configurable: !0, writable: !0 }), t[e]; } try { define({}, ""); } catch (t) { define = function define(t, e, r) { return t[e] = r; }; } function wrap(t, e, r, n) { var i = e && e.prototype instanceof Generator ? e : Generator, a = Object.create(i.prototype), c = new Context(n || []); return o(a, "_invoke", { value: makeInvokeMethod(t, r, c) }), a; } function tryCatch(t, e, r) { try { return { type: "normal", arg: t.call(e, r) }; } catch (t) { return { type: "throw", arg: t }; } } e.wrap = wrap; var h = "suspendedStart", l = "suspendedYield", f = "executing", s = "completed", y = {}; function Generator() {} function GeneratorFunction() {} function GeneratorFunctionPrototype() {} var p = {}; define(p, a, function () { return this; }); var d = Object.getPrototypeOf, v = d && d(d(values([]))); v && v !== r && n.call(v, a) && (p = v); var g = GeneratorFunctionPrototype.prototype = Generator.prototype = Object.create(p); function defineIteratorMethods(t) { ["next", "throw", "return"].forEach(function (e) { define(t, e, function (t) { return this._invoke(e, t); }); }); } function AsyncIterator(t, e) { function invoke(r, o, i, a) { var c = tryCatch(t[r], t, o); if ("throw" !== c.type) { var u = c.arg, h = u.value; return h && "object" == _typeof(h) && n.call(h, "__await") ? e.resolve(h.__await).then(function (t) { invoke("next", t, i, a); }, function (t) { invoke("throw", t, i, a); }) : e.resolve(h).then(function (t) { u.value = t, i(u); }, function (t) { return invoke("throw", t, i, a); }); } a(c.arg); } var r; o(this, "_invoke", { value: function value(t, n) { function callInvokeWithMethodAndArg() { return new e(function (e, r) { invoke(t, n, e, r); }); } return r = r ? r.then(callInvokeWithMethodAndArg, callInvokeWithMethodAndArg) : callInvokeWithMethodAndArg(); } }); } function makeInvokeMethod(e, r, n) { var o = h; return function (i, a) { if (o === f) throw Error("Generator is already running"); if (o === s) { if ("throw" === i) throw a; return { value: t, done: !0 }; } for (n.method = i, n.arg = a;;) { var c = n.delegate; if (c) { var u = maybeInvokeDelegate(c, n); if (u) { if (u === y) continue; return u; } } if ("next" === n.method) n.sent = n._sent = n.arg;else if ("throw" === n.method) { if (o === h) throw o = s, n.arg; n.dispatchException(n.arg); } else "return" === n.method && n.abrupt("return", n.arg); o = f; var p = tryCatch(e, r, n); if ("normal" === p.type) { if (o = n.done ? s : l, p.arg === y) continue; return { value: p.arg, done: n.done }; } "throw" === p.type && (o = s, n.method = "throw", n.arg = p.arg); } }; } function maybeInvokeDelegate(e, r) { var n = r.method, o = e.iterator[n]; if (o === t) return r.delegate = null, "throw" === n && e.iterator["return"] && (r.method = "return", r.arg = t, maybeInvokeDelegate(e, r), "throw" === r.method) || "return" !== n && (r.method = "throw", r.arg = new TypeError("The iterator does not provide a '" + n + "' method")), y; var i = tryCatch(o, e.iterator, r.arg); if ("throw" === i.type) return r.method = "throw", r.arg = i.arg, r.delegate = null, y; var a = i.arg; return a ? a.done ? (r[e.resultName] = a.value, r.next = e.nextLoc, "return" !== r.method && (r.method = "next", r.arg = t), r.delegate = null, y) : a : (r.method = "throw", r.arg = new TypeError("iterator result is not an object"), r.delegate = null, y); } function pushTryEntry(t) { var e = { tryLoc: t[0] }; 1 in t && (e.catchLoc = t[1]), 2 in t && (e.finallyLoc = t[2], e.afterLoc = t[3]), this.tryEntries.push(e); } function resetTryEntry(t) { var e = t.completion || {}; e.type = "normal", delete e.arg, t.completion = e; } function Context(t) { this.tryEntries = [{ tryLoc: "root" }], t.forEach(pushTryEntry, this), this.reset(!0); } function values(e) { if (e || "" === e) { var r = e[a]; if (r) return r.call(e); if ("function" == typeof e.next) return e; if (!isNaN(e.length)) { var o = -1, i = function next() { for (; ++o < e.length;) if (n.call(e, o)) return next.value = e[o], next.done = !1, next; return next.value = t, next.done = !0, next; }; return i.next = i; } } throw new TypeError(_typeof(e) + " is not iterable"); } return GeneratorFunction.prototype = GeneratorFunctionPrototype, o(g, "constructor", { value: GeneratorFunctionPrototype, configurable: !0 }), o(GeneratorFunctionPrototype, "constructor", { value: GeneratorFunction, configurable: !0 }), GeneratorFunction.displayName = define(GeneratorFunctionPrototype, u, "GeneratorFunction"), e.isGeneratorFunction = function (t) { var e = "function" == typeof t && t.constructor; return !!e && (e === GeneratorFunction || "GeneratorFunction" === (e.displayName || e.name)); }, e.mark = function (t) { return Object.setPrototypeOf ? Object.setPrototypeOf(t, GeneratorFunctionPrototype) : (t.__proto__ = GeneratorFunctionPrototype, define(t, u, "GeneratorFunction")), t.prototype = Object.create(g), t; }, e.awrap = function (t) { return { __await: t }; }, defineIteratorMethods(AsyncIterator.prototype), define(AsyncIterator.prototype, c, function () { return this; }), e.AsyncIterator = AsyncIterator, e.async = function (t, r, n, o, i) { void 0 === i && (i = Promise); var a = new AsyncIterator(wrap(t, r, n, o), i); return e.isGeneratorFunction(r) ? a : a.next().then(function (t) { return t.done ? t.value : a.next(); }); }, defineIteratorMethods(g), define(g, u, "Generator"), define(g, a, function () { return this; }), define(g, "toString", function () { return "[object Generator]"; }), e.keys = function (t) { var e = Object(t), r = []; for (var n in e) r.push(n); return r.reverse(), function next() { for (; r.length;) { var t = r.pop(); if (t in e) return next.value = t, next.done = !1, next; } return next.done = !0, next; }; }, e.values = values, Context.prototype = { constructor: Context, reset: function reset(e) { if (this.prev = 0, this.next = 0, this.sent = this._sent = t, this.done = !1, this.delegate = null, this.method = "next", this.arg = t, this.tryEntries.forEach(resetTryEntry), !e) for (var r in this) "t" === r.charAt(0) && n.call(this, r) && !isNaN(+r.slice(1)) && (this[r] = t); }, stop: function stop() { this.done = !0; var t = this.tryEntries[0].completion; if ("throw" === t.type) throw t.arg; return this.rval; }, dispatchException: function dispatchException(e) { if (this.done) throw e; var r = this; function handle(n, o) { return a.type = "throw", a.arg = e, r.next = n, o && (r.method = "next", r.arg = t), !!o; } for (var o = this.tryEntries.length - 1; o >= 0; --o) { var i = this.tryEntries[o], a = i.completion; if ("root" === i.tryLoc) return handle("end"); if (i.tryLoc <= this.prev) { var c = n.call(i, "catchLoc"), u = n.call(i, "finallyLoc"); if (c && u) { if (this.prev < i.catchLoc) return handle(i.catchLoc, !0); if (this.prev < i.finallyLoc) return handle(i.finallyLoc); } else if (c) { if (this.prev < i.catchLoc) return handle(i.catchLoc, !0); } else { if (!u) throw Error("try statement without catch or finally"); if (this.prev < i.finallyLoc) return handle(i.finallyLoc); } } } }, abrupt: function abrupt(t, e) { for (var r = this.tryEntries.length - 1; r >= 0; --r) { var o = this.tryEntries[r]; if (o.tryLoc <= this.prev && n.call(o, "finallyLoc") && this.prev < o.finallyLoc) { var i = o; break; } } i && ("break" === t || "continue" === t) && i.tryLoc <= e && e <= i.finallyLoc && (i = null); var a = i ? i.completion : {}; return a.type = t, a.arg = e, i ? (this.method = "next", this.next = i.finallyLoc, y) : this.complete(a); }, complete: function complete(t, e) { if ("throw" === t.type) throw t.arg; return "break" === t.type || "continue" === t.type ? this.next = t.arg : "return" === t.type ? (this.rval = this.arg = t.arg, this.method = "return", this.next = "end") : "normal" === t.type && e && (this.next = e), y; }, finish: function finish(t) { for (var e = this.tryEntries.length - 1; e >= 0; --e) { var r = this.tryEntries[e]; if (r.finallyLoc === t) return this.complete(r.completion, r.afterLoc), resetTryEntry(r), y; } }, "catch": function _catch(t) { for (var e = this.tryEntries.length - 1; e >= 0; --e) { var r = this.tryEntries[e]; if (r.tryLoc === t) { var n = r.completion; if ("throw" === n.type) { var o = n.arg; resetTryEntry(r); } return o; } } throw Error("illegal catch attempt"); }, delegateYield: function delegateYield(e, r, n) { return this.delegate = { iterator: values(e), resultName: r, nextLoc: n }, "next" === this.method && (this.arg = t), y; } }, e; }

































function asyncGeneratorStep(n, t, e, r, o, a, c) { try { var i = n[a](c), u = i.value; } catch (n) { return void e(n); } i.done ? t(u) : Promise.resolve(u).then(r, o); }
function _asyncToGenerator(n) { return function () { var t = this, e = arguments; return new Promise(function (r, o) { var a = n.apply(t, e); function _next(n) { asyncGeneratorStep(a, r, o, _next, _throw, "next", n); } function _throw(n) { asyncGeneratorStep(a, r, o, _next, _throw, "throw", n); } _next(void 0); }); }; }
function _classCallCheck(a, n) { if (!(a instanceof n)) throw new TypeError("Cannot call a class as a function"); }
function _defineProperties(e, r) { for (var t = 0; t < r.length; t++) { var o = r[t]; o.enumerable = o.enumerable || !1, o.configurable = !0, "value" in o && (o.writable = !0), Object.defineProperty(e, _toPropertyKey(o.key), o); } }
function _createClass(e, r, t) { return r && _defineProperties(e.prototype, r), t && _defineProperties(e, t), Object.defineProperty(e, "prototype", { writable: !1 }), e; }
function _callSuper(t, o, e) { return o = _getPrototypeOf(o), _possibleConstructorReturn(t, _isNativeReflectConstruct() ? Reflect.construct(o, e || [], _getPrototypeOf(t).constructor) : o.apply(t, e)); }
function _possibleConstructorReturn(t, e) { if (e && ("object" == _typeof(e) || "function" == typeof e)) return e; if (void 0 !== e) throw new TypeError("Derived constructors may only return object or undefined"); return _assertThisInitialized(t); }
function _assertThisInitialized(e) { if (void 0 === e) throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); return e; }
function _isNativeReflectConstruct() { try { var t = !Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], function () {})); } catch (t) {} return (_isNativeReflectConstruct = function _isNativeReflectConstruct() { return !!t; })(); }
function _getPrototypeOf(t) { return _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf.bind() : function (t) { return t.__proto__ || Object.getPrototypeOf(t); }, _getPrototypeOf(t); }
function _inherits(t, e) { if ("function" != typeof e && null !== e) throw new TypeError("Super expression must either be null or a function"); t.prototype = Object.create(e && e.prototype, { constructor: { value: t, writable: !0, configurable: !0 } }), Object.defineProperty(t, "prototype", { writable: !1 }), e && _setPrototypeOf(t, e); }
function _setPrototypeOf(t, e) { return _setPrototypeOf = Object.setPrototypeOf ? Object.setPrototypeOf.bind() : function (t, e) { return t.__proto__ = e, t; }, _setPrototypeOf(t, e); }
function _defineProperty(e, r, t) { return (r = _toPropertyKey(r)) in e ? Object.defineProperty(e, r, { value: t, enumerable: !0, configurable: !0, writable: !0 }) : e[r] = t, e; }
function _toPropertyKey(t) { var i = _toPrimitive(t, "string"); return "symbol" == _typeof(i) ? i : i + ""; }
function _toPrimitive(t, r) { if ("object" != _typeof(t) || !t) return t; var e = t[Symbol.toPrimitive]; if (void 0 !== e) { var i = e.call(t, r || "default"); if ("object" != _typeof(i)) return i; throw new TypeError("@@toPrimitive must return a primitive value."); } return ("string" === r ? String : Number)(t); }





var _default = /*#__PURE__*/function (_Controller) {
  function _default() {
    _classCallCheck(this, _default);
    return _callSuper(this, _default, arguments);
  }
  _inherits(_default, _Controller);
  return _createClass(_default, [{
    key: "connect",
    value: function connect() {
      this.initializeCharts();
      if (this.hasUpdateIntervalValue) {
        this.startAutoRefresh();
      }
      this.initializeTheme();
    }
  }, {
    key: "disconnect",
    value: function disconnect() {
      if (this.refreshInterval) {
        clearInterval(this.refreshInterval);
      }
    }
  }, {
    key: "refreshData",
    value: function () {
      var _refreshData = _asyncToGenerator(/*#__PURE__*/_regeneratorRuntime().mark(function _callee(event) {
        var period, loadingOverlay, response, data;
        return _regeneratorRuntime().wrap(function _callee$(_context) {
          while (1) switch (_context.prev = _context.next) {
            case 0:
              period = event.currentTarget.dataset.period;
              loadingOverlay = this.element.querySelector('.loading-overlay');
              _context.prev = 2;
              loadingOverlay.style.display = 'flex';
              _context.next = 6;
              return fetch("".concat(this.refreshUrlValue, "?period=").concat(period));
            case 6:
              response = _context.sent;
              _context.next = 9;
              return response.json();
            case 9:
              data = _context.sent;
              this.updateStats(data.revenueStats);
              this.updateCharts(data);
              _context.next = 17;
              break;
            case 14:
              _context.prev = 14;
              _context.t0 = _context["catch"](2);
              console.error('Error refreshing data:', _context.t0);
            case 17:
              _context.prev = 17;
              loadingOverlay.style.display = 'none';
              return _context.finish(17);
            case 20:
            case "end":
              return _context.stop();
          }
        }, _callee, this, [[2, 14, 17, 20]]);
      }));
      function refreshData(_x) {
        return _refreshData.apply(this, arguments);
      }
      return refreshData;
    }()
  }, {
    key: "toggleTheme",
    value: function toggleTheme() {
      document.body.classList.toggle('dark-mode');
      var isDark = document.body.classList.contains('dark-mode');
      localStorage.setItem('darkMode', isDark);
      this.updateChartsTheme(isDark);
    }
  }, {
    key: "initializeTheme",
    value: function initializeTheme() {
      var isDark = localStorage.getItem('darkMode') === 'true';
      if (isDark) {
        document.body.classList.add('dark-mode');
        this.updateChartsTheme(true);
      }
    }
  }, {
    key: "updateChartsTheme",
    value: function updateChartsTheme(isDark) {
      var theme = {
        color: isDark ? '#ffffff' : '#666666',
        gridColor: isDark ? 'rgba(255, 255, 255, 0.1)' : 'rgba(0, 0, 0, 0.1)'
      };
      [this.purchaseChartTarget, this.sentimentChartTarget, this.heatmapChartTarget].forEach(function (canvas) {
        var chart = chart_js_auto__WEBPACK_IMPORTED_MODULE_34__.Chart.getChart(canvas);
        if (chart) {
          chart.options.scales.x.grid.color = theme.gridColor;
          chart.options.scales.y.grid.color = theme.gridColor;
          chart.options.scales.x.ticks.color = theme.color;
          chart.options.scales.y.ticks.color = theme.color;
          chart.update();
        }
      });
    }
  }, {
    key: "updateStats",
    value: function updateStats(stats) {
      this.statsTargets.forEach(function (stat) {
        var key = stat.dataset.stat;
        var value = stats[key];
        if (key.includes('revenue') || key.includes('price')) {
          stat.textContent = new Intl.NumberFormat('fr-FR', {
            style: 'currency',
            currency: 'EUR'
          }).format(value);
        } else {
          stat.textContent = new Intl.NumberFormat('fr-FR').format(value);
        }
      });
    }
  }, {
    key: "updateCharts",
    value: function updateCharts(data) {
      // Update purchase trends chart
      var purchaseChart = chart_js_auto__WEBPACK_IMPORTED_MODULE_34__.Chart.getChart(this.purchaseChartTarget);
      if (purchaseChart && data.trends) {
        purchaseChart.data.labels = data.trends.map(function (item) {
          return item.date;
        });
        purchaseChart.data.datasets[0].data = data.trends.map(function (item) {
          return item.purchases;
        });
        purchaseChart.data.datasets[1].data = data.trends.map(function (item) {
          return item.revenue;
        });
        purchaseChart.update();
      }

      // Update other charts if needed
    }
  }, {
    key: "startAutoRefresh",
    value: function startAutoRefresh() {
      var _this = this;
      this.refreshInterval = setInterval(function () {
        _this.refreshData({
          currentTarget: {
            dataset: {
              period: 'P30D'
            }
          }
        });
      }, this.updateIntervalValue);
    }
  }, {
    key: "initializeAnimations",
    value: function initializeAnimations() {
      // Animate stat cards on load
      gsap__WEBPACK_IMPORTED_MODULE_37__.gsap.from(this.statCardTargets, {
        duration: 0.8,
        y: 20,
        opacity: 0,
        stagger: 0.2,
        ease: "power2.out"
      });

      // Add hover animations
      this.statCardTargets.forEach(function (card) {
        card.addEventListener('mouseenter', function () {
          gsap__WEBPACK_IMPORTED_MODULE_37__.gsap.to(card, {
            scale: 1.02,
            duration: 0.3,
            ease: "power2.out"
          });
        });
        card.addEventListener('mouseleave', function () {
          gsap__WEBPACK_IMPORTED_MODULE_37__.gsap.to(card, {
            scale: 1,
            duration: 0.3,
            ease: "power2.out"
          });
        });
      });
    }
  }, {
    key: "initializeAOS",
    value: function initializeAOS() {
      aos__WEBPACK_IMPORTED_MODULE_35___default().init({
        duration: 1000,
        once: true,
        offset: 100
      });
    }
  }, {
    key: "showConfirmation",
    value: function showConfirmation(event) {
      event.preventDefault();
      sweetalert2__WEBPACK_IMPORTED_MODULE_36___default().fire({
        title: 'Are you sure?',
        text: "This action cannot be undone",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#7367F0',
        cancelButtonColor: '#82868B',
        confirmButtonText: 'Yes, proceed!'
      }).then(function (result) {
        if (result.isConfirmed) {
          event.target.closest('form').submit();
        }
      });
    }
  }]);
}(_hotwired_stimulus__WEBPACK_IMPORTED_MODULE_33__.Controller);
_defineProperty(_default, "targets", ['purchaseChart', 'sentimentChart', 'heatmapChart', 'stats']);
_defineProperty(_default, "values", {
  refreshUrl: String,
  updateInterval: Number
});


/***/ })

},
/******/ __webpack_require__ => { // webpackRuntimeModules
/******/ var __webpack_exec__ = (moduleId) => (__webpack_require__(__webpack_require__.s = moduleId))
/******/ __webpack_require__.O(0, ["vendors-node_modules_aos_dist_aos_js-node_modules_gsap_index_js-node_modules_sweetalert2_dist-51a58f"], () => (__webpack_exec__("./assets/app.js")));
/******/ var __webpack_exports__ = __webpack_require__.O();
/******/ }
]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,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Q1osQ0FBQyxDQUFDO0lBQ047RUFBQztJQUFBMUgsR0FBQTtJQUFBdEcsS0FBQSxFQUVELFNBQUFpTyxnQkFBZ0JBLENBQUN2RixLQUFLLEVBQUU7TUFDcEJBLEtBQUssQ0FBQ3dGLGNBQWMsQ0FBQyxDQUFDO01BQ3RCckcsd0RBQVMsQ0FBQztRQUNOdUcsS0FBSyxFQUFFLGVBQWU7UUFDdEJDLElBQUksRUFBRSw4QkFBOEI7UUFDcENDLElBQUksRUFBRSxTQUFTO1FBQ2ZDLGdCQUFnQixFQUFFLElBQUk7UUFDdEJDLGtCQUFrQixFQUFFLFNBQVM7UUFDN0JDLGlCQUFpQixFQUFFLFNBQVM7UUFDNUJDLGlCQUFpQixFQUFFO01BQ3ZCLENBQUMsQ0FBQyxDQUFDL0wsSUFBSSxDQUFDLFVBQUNnTSxNQUFNLEVBQUs7UUFDaEIsSUFBSUEsTUFBTSxDQUFDQyxXQUFXLEVBQUU7VUFDcEJsRyxLQUFLLENBQUNtRyxNQUFNLENBQUNDLE9BQU8sQ0FBQyxNQUFNLENBQUMsQ0FBQ0MsTUFBTSxDQUFDLENBQUM7UUFDekM7TUFDSixDQUFDLENBQUM7SUFDTjtFQUFDO0FBQUEsRUFuS3dCckgsMkRBQVU7QUFBQUwsZUFBQSxDQUFBUyxRQUFBLGFBQ2xCLENBQUMsZUFBZSxFQUFFLGdCQUFnQixFQUFFLGNBQWMsRUFBRSxPQUFPLENBQUM7QUFBQVQsZUFBQSxDQUFBUyxRQUFBLFlBQzdEO0VBQ1prSCxVQUFVLEVBQUV4SCxNQUFNO0VBQ2xCeUgsY0FBYyxFQUFFeEg7QUFDcEIsQ0FBQyIsInNvdXJjZXMiOlsid2VicGFjazovL2dvbGRlbi10b3VjaC1zeW1mb255Ly4vYXNzZXRzL2FwcC5qcyIsIndlYnBhY2s6Ly9nb2xkZW4tdG91Y2gtc3ltZm9ueS8uL2Fzc2V0cy9ib290c3RyYXAuanMiLCJ3ZWJwYWNrOi8vZ29sZGVuLXRvdWNoLXN5bWZvbnkvLi9hc3NldHMvY29udHJvbGxlcnMvZGFzaGJvYXJkX2NvbnRyb2xsZXIuanMiXSwic291cmNlc0NvbnRlbnQiOlsiaW1wb3J0ICcuL2Jvb3RzdHJhcC5qcyc7XHJcblxyXG4vLyBJbXBvcnQgQ2hhcnQuanNcclxuaW1wb3J0IHsgQ2hhcnQgfSBmcm9tICdjaGFydC5qcy9hdXRvJztcclxuaW1wb3J0ICdjaGFydGpzLWFkYXB0ZXItZGF0ZS1mbnMnO1xyXG5pbXBvcnQgeyBmciB9IGZyb20gJ2RhdGUtZm5zL2xvY2FsZSc7XHJcblxyXG4vLyBDb25maWd1cmUgQ2hhcnQuanMgZGVmYXVsdHNcclxuQ2hhcnQuZGVmYXVsdHMubG9jYWxlID0gZnI7XHJcbkNoYXJ0LmRlZmF1bHRzLnJlc3BvbnNpdmUgPSB0cnVlO1xyXG5DaGFydC5kZWZhdWx0cy5tYWludGFpbkFzcGVjdFJhdGlvID0gZmFsc2U7XHJcblxyXG4vLyBJbXBvcnQgU3RpbXVsdXMgY29udHJvbGxlcnNcclxuaW1wb3J0ICcuL2NvbnRyb2xsZXJzL2Rhc2hib2FyZF9jb250cm9sbGVyJztcclxuXHJcbmNvbnNvbGUubG9nKCdUaGlzIGxvZyBjb21lcyBmcm9tIGFzc2V0cy9hcHAuanMgLSB3ZWxjb21lIHRvIEFzc2V0TWFwcGVyISAnKTtcclxuIiwiaW1wb3J0IHsgc3RhcnRTdGltdWx1c0FwcCB9IGZyb20gJ0BzeW1mb255L3N0aW11bHVzLWJ1bmRsZSc7XHJcblxyXG5jb25zdCBhcHAgPSBzdGFydFN0aW11bHVzQXBwKCk7XHJcbi8vIHJlZ2lzdGVyIGFueSBjdXN0b20sIDNyZCBwYXJ0eSBjb250cm9sbGVycyBoZXJlXHJcbi8vIGFwcC5yZWdpc3Rlcignc29tZV9jb250cm9sbGVyX25hbWUnLCBTb21lSW1wb3J0ZWRDb250cm9sbGVyKTtcclxuIiwiaW1wb3J0IHsgQ29udHJvbGxlciB9IGZyb20gJ0Bob3R3aXJlZC9zdGltdWx1cyc7XHJcbmltcG9ydCB7IENoYXJ0IH0gZnJvbSAnY2hhcnQuanMvYXV0byc7XHJcbmltcG9ydCB7IGdzYXAgfSBmcm9tICdnc2FwJztcclxuaW1wb3J0IEFPUyBmcm9tICdhb3MnO1xyXG5pbXBvcnQgU3dhbCBmcm9tICdzd2VldGFsZXJ0Mic7XHJcblxyXG5leHBvcnQgZGVmYXVsdCBjbGFzcyBleHRlbmRzIENvbnRyb2xsZXIge1xyXG4gICAgc3RhdGljIHRhcmdldHMgPSBbJ3B1cmNoYXNlQ2hhcnQnLCAnc2VudGltZW50Q2hhcnQnLCAnaGVhdG1hcENoYXJ0JywgJ3N0YXRzJ107XHJcbiAgICBzdGF0aWMgdmFsdWVzID0ge1xyXG4gICAgICAgIHJlZnJlc2hVcmw6IFN0cmluZyxcclxuICAgICAgICB1cGRhdGVJbnRlcnZhbDogTnVtYmVyXHJcbiAgICB9O1xyXG5cclxuICAgIGNvbm5lY3QoKSB7XHJcbiAgICAgICAgdGhpcy5pbml0aWFsaXplQ2hhcnRzKCk7XHJcbiAgICAgICAgaWYgKHRoaXMuaGFzVXBkYXRlSW50ZXJ2YWxWYWx1ZSkge1xyXG4gICAgICAgICAgICB0aGlzLnN0YXJ0QXV0b1JlZnJlc2goKTtcclxuICAgICAgICB9XHJcbiAgICAgICAgdGhpcy5pbml0aWFsaXplVGhlbWUoKTtcclxuICAgIH1cclxuXHJcbiAgICBkaXNjb25uZWN0KCkge1xyXG4gICAgICAgIGlmICh0aGlzLnJlZnJlc2hJbnRlcnZhbCkge1xyXG4gICAgICAgICAgICBjbGVhckludGVydmFsKHRoaXMucmVmcmVzaEludGVydmFsKTtcclxuICAgICAgICB9XHJcbiAgICB9XHJcblxyXG4gICAgYXN5bmMgcmVmcmVzaERhdGEoZXZlbnQpIHtcclxuICAgICAgICBjb25zdCBwZXJpb2QgPSBldmVudC5jdXJyZW50VGFyZ2V0LmRhdGFzZXQucGVyaW9kO1xyXG4gICAgICAgIGNvbnN0IGxvYWRpbmdPdmVybGF5ID0gdGhpcy5lbGVtZW50LnF1ZXJ5U2VsZWN0b3IoJy5sb2FkaW5nLW92ZXJsYXknKTtcclxuICAgICAgICBcclxuICAgICAgICB0cnkge1xyXG4gICAgICAgICAgICBsb2FkaW5nT3ZlcmxheS5zdHlsZS5kaXNwbGF5ID0gJ2ZsZXgnO1xyXG4gICAgICAgICAgICBjb25zdCByZXNwb25zZSA9IGF3YWl0IGZldGNoKGAke3RoaXMucmVmcmVzaFVybFZhbHVlfT9wZXJpb2Q9JHtwZXJpb2R9YCk7XHJcbiAgICAgICAgICAgIGNvbnN0IGRhdGEgPSBhd2FpdCByZXNwb25zZS5qc29uKCk7XHJcbiAgICAgICAgICAgIFxyXG4gICAgICAgICAgICB0aGlzLnVwZGF0ZVN0YXRzKGRhdGEucmV2ZW51ZVN0YXRzKTtcclxuICAgICAgICAgICAgdGhpcy51cGRhdGVDaGFydHMoZGF0YSk7XHJcbiAgICAgICAgICAgIFxyXG4gICAgICAgIH0gY2F0Y2ggKGVycm9yKSB7XHJcbiAgICAgICAgICAgIGNvbnNvbGUuZXJyb3IoJ0Vycm9yIHJlZnJlc2hpbmcgZGF0YTonLCBlcnJvcik7XHJcbiAgICAgICAgfSBmaW5hbGx5IHtcclxuICAgICAgICAgICAgbG9hZGluZ092ZXJsYXkuc3R5bGUuZGlzcGxheSA9ICdub25lJztcclxuICAgICAgICB9XHJcbiAgICB9XHJcblxyXG4gICAgdG9nZ2xlVGhlbWUoKSB7XHJcbiAgICAgICAgZG9jdW1lbnQuYm9keS5jbGFzc0xpc3QudG9nZ2xlKCdkYXJrLW1vZGUnKTtcclxuICAgICAgICBjb25zdCBpc0RhcmsgPSBkb2N1bWVudC5ib2R5LmNsYXNzTGlzdC5jb250YWlucygnZGFyay1tb2RlJyk7XHJcbiAgICAgICAgbG9jYWxTdG9yYWdlLnNldEl0ZW0oJ2RhcmtNb2RlJywgaXNEYXJrKTtcclxuICAgICAgICBcclxuICAgICAgICB0aGlzLnVwZGF0ZUNoYXJ0c1RoZW1lKGlzRGFyayk7XHJcbiAgICB9XHJcblxyXG4gICAgaW5pdGlhbGl6ZVRoZW1lKCkge1xyXG4gICAgICAgIGNvbnN0IGlzRGFyayA9IGxvY2FsU3RvcmFnZS5nZXRJdGVtKCdkYXJrTW9kZScpID09PSAndHJ1ZSc7XHJcbiAgICAgICAgaWYgKGlzRGFyaykge1xyXG4gICAgICAgICAgICBkb2N1bWVudC5ib2R5LmNsYXNzTGlzdC5hZGQoJ2RhcmstbW9kZScpO1xyXG4gICAgICAgICAgICB0aGlzLnVwZGF0ZUNoYXJ0c1RoZW1lKHRydWUpO1xyXG4gICAgICAgIH1cclxuICAgIH1cclxuXHJcbiAgICB1cGRhdGVDaGFydHNUaGVtZShpc0RhcmspIHtcclxuICAgICAgICBjb25zdCB0aGVtZSA9IHtcclxuICAgICAgICAgICAgY29sb3I6IGlzRGFyayA/ICcjZmZmZmZmJyA6ICcjNjY2NjY2JyxcclxuICAgICAgICAgICAgZ3JpZENvbG9yOiBpc0RhcmsgPyAncmdiYSgyNTUsIDI1NSwgMjU1LCAwLjEpJyA6ICdyZ2JhKDAsIDAsIDAsIDAuMSknXHJcbiAgICAgICAgfTtcclxuXHJcbiAgICAgICAgW3RoaXMucHVyY2hhc2VDaGFydFRhcmdldCwgdGhpcy5zZW50aW1lbnRDaGFydFRhcmdldCwgdGhpcy5oZWF0bWFwQ2hhcnRUYXJnZXRdXHJcbiAgICAgICAgICAgIC5mb3JFYWNoKGNhbnZhcyA9PiB7XHJcbiAgICAgICAgICAgICAgICBjb25zdCBjaGFydCA9IENoYXJ0LmdldENoYXJ0KGNhbnZhcyk7XHJcbiAgICAgICAgICAgICAgICBpZiAoY2hhcnQpIHtcclxuICAgICAgICAgICAgICAgICAgICBjaGFydC5vcHRpb25zLnNjYWxlcy54LmdyaWQuY29sb3IgPSB0aGVtZS5ncmlkQ29sb3I7XHJcbiAgICAgICAgICAgICAgICAgICAgY2hhcnQub3B0aW9ucy5zY2FsZXMueS5ncmlkLmNvbG9yID0gdGhlbWUuZ3JpZENvbG9yO1xyXG4gICAgICAgICAgICAgICAgICAgIGNoYXJ0Lm9wdGlvbnMuc2NhbGVzLngudGlja3MuY29sb3IgPSB0aGVtZS5jb2xvcjtcclxuICAgICAgICAgICAgICAgICAgICBjaGFydC5vcHRpb25zLnNjYWxlcy55LnRpY2tzLmNvbG9yID0gdGhlbWUuY29sb3I7XHJcbiAgICAgICAgICAgICAgICAgICAgY2hhcnQudXBkYXRlKCk7XHJcbiAgICAgICAgICAgICAgICB9XHJcbiAgICAgICAgICAgIH0pO1xyXG4gICAgfVxyXG5cclxuICAgIHVwZGF0ZVN0YXRzKHN0YXRzKSB7XHJcbiAgICAgICAgdGhpcy5zdGF0c1RhcmdldHMuZm9yRWFjaChzdGF0ID0+IHtcclxuICAgICAgICAgICAgY29uc3Qga2V5ID0gc3RhdC5kYXRhc2V0LnN0YXQ7XHJcbiAgICAgICAgICAgIGNvbnN0IHZhbHVlID0gc3RhdHNba2V5XTtcclxuICAgICAgICAgICAgXHJcbiAgICAgICAgICAgIGlmIChrZXkuaW5jbHVkZXMoJ3JldmVudWUnKSB8fCBrZXkuaW5jbHVkZXMoJ3ByaWNlJykpIHtcclxuICAgICAgICAgICAgICAgIHN0YXQudGV4dENvbnRlbnQgPSBuZXcgSW50bC5OdW1iZXJGb3JtYXQoJ2ZyLUZSJywge1xyXG4gICAgICAgICAgICAgICAgICAgIHN0eWxlOiAnY3VycmVuY3knLFxyXG4gICAgICAgICAgICAgICAgICAgIGN1cnJlbmN5OiAnRVVSJ1xyXG4gICAgICAgICAgICAgICAgfSkuZm9ybWF0KHZhbHVlKTtcclxuICAgICAgICAgICAgfSBlbHNlIHtcclxuICAgICAgICAgICAgICAgIHN0YXQudGV4dENvbnRlbnQgPSBuZXcgSW50bC5OdW1iZXJGb3JtYXQoJ2ZyLUZSJykuZm9ybWF0KHZhbHVlKTtcclxuICAgICAgICAgICAgfVxyXG4gICAgICAgIH0pO1xyXG4gICAgfVxyXG5cclxuICAgIHVwZGF0ZUNoYXJ0cyhkYXRhKSB7XHJcbiAgICAgICAgLy8gVXBkYXRlIHB1cmNoYXNlIHRyZW5kcyBjaGFydFxyXG4gICAgICAgIGNvbnN0IHB1cmNoYXNlQ2hhcnQgPSBDaGFydC5nZXRDaGFydCh0aGlzLnB1cmNoYXNlQ2hhcnRUYXJnZXQpO1xyXG4gICAgICAgIGlmIChwdXJjaGFzZUNoYXJ0ICYmIGRhdGEudHJlbmRzKSB7XHJcbiAgICAgICAgICAgIHB1cmNoYXNlQ2hhcnQuZGF0YS5sYWJlbHMgPSBkYXRhLnRyZW5kcy5tYXAoaXRlbSA9PiBpdGVtLmRhdGUpO1xyXG4gICAgICAgICAgICBwdXJjaGFzZUNoYXJ0LmRhdGEuZGF0YXNldHNbMF0uZGF0YSA9IGRhdGEudHJlbmRzLm1hcChpdGVtID0+IGl0ZW0ucHVyY2hhc2VzKTtcclxuICAgICAgICAgICAgcHVyY2hhc2VDaGFydC5kYXRhLmRhdGFzZXRzWzFdLmRhdGEgPSBkYXRhLnRyZW5kcy5tYXAoaXRlbSA9PiBpdGVtLnJldmVudWUpO1xyXG4gICAgICAgICAgICBwdXJjaGFzZUNoYXJ0LnVwZGF0ZSgpO1xyXG4gICAgICAgIH1cclxuXHJcbiAgICAgICAgLy8gVXBkYXRlIG90aGVyIGNoYXJ0cyBpZiBuZWVkZWRcclxuICAgIH1cclxuXHJcbiAgICBzdGFydEF1dG9SZWZyZXNoKCkge1xyXG4gICAgICAgIHRoaXMucmVmcmVzaEludGVydmFsID0gc2V0SW50ZXJ2YWwoKCkgPT4ge1xyXG4gICAgICAgICAgICB0aGlzLnJlZnJlc2hEYXRhKHsgY3VycmVudFRhcmdldDogeyBkYXRhc2V0OiB7IHBlcmlvZDogJ1AzMEQnIH0gfSB9KTtcclxuICAgICAgICB9LCB0aGlzLnVwZGF0ZUludGVydmFsVmFsdWUpO1xyXG4gICAgfVxyXG5cclxuICAgIGluaXRpYWxpemVBbmltYXRpb25zKCkge1xyXG4gICAgICAgIC8vIEFuaW1hdGUgc3RhdCBjYXJkcyBvbiBsb2FkXHJcbiAgICAgICAgZ3NhcC5mcm9tKHRoaXMuc3RhdENhcmRUYXJnZXRzLCB7XHJcbiAgICAgICAgICAgIGR1cmF0aW9uOiAwLjgsXHJcbiAgICAgICAgICAgIHk6IDIwLFxyXG4gICAgICAgICAgICBvcGFjaXR5OiAwLFxyXG4gICAgICAgICAgICBzdGFnZ2VyOiAwLjIsXHJcbiAgICAgICAgICAgIGVhc2U6IFwicG93ZXIyLm91dFwiXHJcbiAgICAgICAgfSk7XHJcblxyXG4gICAgICAgIC8vIEFkZCBob3ZlciBhbmltYXRpb25zXHJcbiAgICAgICAgdGhpcy5zdGF0Q2FyZFRhcmdldHMuZm9yRWFjaChjYXJkID0+IHtcclxuICAgICAgICAgICAgY2FyZC5hZGRFdmVudExpc3RlbmVyKCdtb3VzZWVudGVyJywgKCkgPT4ge1xyXG4gICAgICAgICAgICAgICAgZ3NhcC50byhjYXJkLCB7XHJcbiAgICAgICAgICAgICAgICAgICAgc2NhbGU6IDEuMDIsXHJcbiAgICAgICAgICAgICAgICAgICAgZHVyYXRpb246IDAuMyxcclxuICAgICAgICAgICAgICAgICAgICBlYXNlOiBcInBvd2VyMi5vdXRcIlxyXG4gICAgICAgICAgICAgICAgfSk7XHJcbiAgICAgICAgICAgIH0pO1xyXG5cclxuICAgICAgICAgICAgY2FyZC5hZGRFdmVudExpc3RlbmVyKCdtb3VzZWxlYXZlJywgKCkgPT4ge1xyXG4gICAgICAgICAgICAgICAgZ3NhcC50byhjYXJkLCB7XHJcbiAgICAgICAgICAgICAgICAgICAgc2NhbGU6IDEsXHJcbiAgICAgICAgICAgICAgICAgICAgZHVyYXRpb246IDAuMyxcclxuICAgICAgICAgICAgICAgICAgICBlYXNlOiBcInBvd2VyMi5vdXRcIlxyXG4gICAgICAgICAgICAgICAgfSk7XHJcbiAgICAgICAgICAgIH0pO1xyXG4gICAgICAgIH0pO1xyXG4gICAgfVxyXG5cclxuICAgIGluaXRpYWxpemVBT1MoKSB7XHJcbiAgICAgICAgQU9TLmluaXQoe1xyXG4gICAgICAgICAgICBkdXJhdGlvbjogMTAwMCxcclxuICAgICAgICAgICAgb25jZTogdHJ1ZSxcclxuICAgICAgICAgICAgb2Zmc2V0OiAxMDBcclxuICAgICAgICB9KTtcclxuICAgIH1cclxuXHJcbiAgICBzaG93Q29uZmlybWF0aW9uKGV2ZW50KSB7XHJcbiAgICAgICAgZXZlbnQucHJldmVudERlZmF1bHQoKTtcclxuICAgICAgICBTd2FsLmZpcmUoe1xyXG4gICAgICAgICAgICB0aXRsZTogJ0FyZSB5b3Ugc3VyZT8nLFxyXG4gICAgICAgICAgICB0ZXh0OiBcIlRoaXMgYWN0aW9uIGNhbm5vdCBiZSB1bmRvbmVcIixcclxuICAgICAgICAgICAgaWNvbjogJ3dhcm5pbmcnLFxyXG4gICAgICAgICAgICBzaG93Q2FuY2VsQnV0dG9uOiB0cnVlLFxyXG4gICAgICAgICAgICBjb25maXJtQnV0dG9uQ29sb3I6ICcjNzM2N0YwJyxcclxuICAgICAgICAgICAgY2FuY2VsQnV0dG9uQ29sb3I6ICcjODI4NjhCJyxcclxuICAgICAgICAgICAgY29uZmlybUJ1dHRvblRleHQ6ICdZZXMsIHByb2NlZWQhJ1xyXG4gICAgICAgIH0pLnRoZW4oKHJlc3VsdCkgPT4ge1xyXG4gICAgICAgICAgICBpZiAocmVzdWx0LmlzQ29uZmlybWVkKSB7XHJcbiAgICAgICAgICAgICAgICBldmVudC50YXJnZXQuY2xvc2VzdCgnZm9ybScpLnN1Ym1pdCgpO1xyXG4gICAgICAgICAgICB9XHJcbiAgICAgICAgfSk7XHJcbiAgICB9XHJcbn1cclxuIl0sIm5hbWVzIjpbIkNoYXJ0IiwiZnIiLCJkZWZhdWx0cyIsImxvY2FsZSIsInJlc3BvbnNpdmUiLCJtYWludGFpbkFzcGVjdFJhdGlvIiwiY29uc29sZSIsImxvZyIsInN0YXJ0U3RpbXVsdXNBcHAiLCJhcHAiLCJfcmVnZW5lcmF0b3JSdW50aW1lIiwiZSIsInQiLCJyIiwiT2JqZWN0IiwicHJvdG90eXBlIiwibiIsImhhc093blByb3BlcnR5IiwibyIsImRlZmluZVByb3BlcnR5IiwidmFsdWUiLCJpIiwiU3ltYm9sIiwiYSIsIml0ZXJhdG9yIiwiYyIsImFzeW5jSXRlcmF0b3IiLCJ1IiwidG9TdHJpbmdUYWciLCJkZWZpbmUiLCJlbnVtZXJhYmxlIiwiY29uZmlndXJhYmxlIiwid3JpdGFibGUiLCJ3cmFwIiwiR2VuZXJhdG9yIiwiY3JlYXRlIiwiQ29udGV4dCIsIm1ha2VJbnZva2VNZXRob2QiLCJ0cnlDYXRjaCIsInR5cGUiLCJhcmciLCJjYWxsIiwiaCIsImwiLCJmIiwicyIsInkiLCJHZW5lcmF0b3JGdW5jdGlvbiIsIkdlbmVyYXRvckZ1bmN0aW9uUHJvdG90eXBlIiwicCIsImQiLCJnZXRQcm90b3R5cGVPZiIsInYiLCJ2YWx1ZXMiLCJnIiwiZGVmaW5lSXRlcmF0b3JNZXRob2RzIiwiZm9yRWFjaCIsIl9pbnZva2UiLCJBc3luY0l0ZXJhdG9yIiwiaW52b2tlIiwiX3R5cGVvZiIsInJlc29sdmUiLCJfX2F3YWl0IiwidGhlbiIsImNhbGxJbnZva2VXaXRoTWV0aG9kQW5kQXJnIiwiRXJyb3IiLCJkb25lIiwibWV0aG9kIiwiZGVsZWdhdGUiLCJtYXliZUludm9rZURlbGVnYXRlIiwic2VudCIsIl9zZW50IiwiZGlzcGF0Y2hFeGNlcHRpb24iLCJhYnJ1cHQiLCJUeXBlRXJyb3IiLCJyZXN1bHROYW1lIiwibmV4dCIsIm5leHRMb2MiLCJwdXNoVHJ5RW50cnkiLCJ0cnlMb2MiLCJjYXRjaExvYyIsImZpbmFsbHlMb2MiLCJhZnRlckxvYyIsInRyeUVudHJpZXMiLCJwdXNoIiwicmVzZXRUcnlFbnRyeSIsImNvbXBsZXRpb24iLCJyZXNldCIsImlzTmFOIiwibGVuZ3RoIiwiZGlzcGxheU5hbWUiLCJpc0dlbmVyYXRvckZ1bmN0aW9uIiwiY29uc3RydWN0b3IiLCJuYW1lIiwibWFyayIsInNldFByb3RvdHlwZU9mIiwiX19wcm90b19fIiwiYXdyYXAiLCJhc3luYyIsIlByb21pc2UiLCJrZXlzIiwicmV2ZXJzZSIsInBvcCIsInByZXYiLCJjaGFyQXQiLCJzbGljZSIsInN0b3AiLCJydmFsIiwiaGFuZGxlIiwiY29tcGxldGUiLCJmaW5pc2giLCJfY2F0Y2giLCJkZWxlZ2F0ZVlpZWxkIiwiYXN5bmNHZW5lcmF0b3JTdGVwIiwiX2FzeW5jVG9HZW5lcmF0b3IiLCJhcmd1bWVudHMiLCJhcHBseSIsIl9uZXh0IiwiX3Rocm93IiwiX2NsYXNzQ2FsbENoZWNrIiwiX2RlZmluZVByb3BlcnRpZXMiLCJfdG9Qcm9wZXJ0eUtleSIsImtleSIsIl9jcmVhdGVDbGFzcyIsIl9jYWxsU3VwZXIiLCJfZ2V0UHJvdG90eXBlT2YiLCJfcG9zc2libGVDb25zdHJ1Y3RvclJldHVybiIsIl9pc05hdGl2ZVJlZmxlY3RDb25zdHJ1Y3QiLCJSZWZsZWN0IiwiY29uc3RydWN0IiwiX2Fzc2VydFRoaXNJbml0aWFsaXplZCIsIlJlZmVyZW5jZUVycm9yIiwiQm9vbGVhbiIsInZhbHVlT2YiLCJiaW5kIiwiX2luaGVyaXRzIiwiX3NldFByb3RvdHlwZU9mIiwiX2RlZmluZVByb3BlcnR5IiwiX3RvUHJpbWl0aXZlIiwidG9QcmltaXRpdmUiLCJTdHJpbmciLCJOdW1iZXIiLCJDb250cm9sbGVyIiwiZ3NhcCIsIkFPUyIsIlN3YWwiLCJfZGVmYXVsdCIsIl9Db250cm9sbGVyIiwiY29ubmVjdCIsImluaXRpYWxpemVDaGFydHMiLCJoYXNVcGRhdGVJbnRlcnZhbFZhbHVlIiwic3RhcnRBdXRvUmVmcmVzaCIsImluaXRpYWxpemVUaGVtZSIsImRpc2Nvbm5lY3QiLCJyZWZyZXNoSW50ZXJ2YWwiLCJjbGVhckludGVydmFsIiwiX3JlZnJlc2hEYXRhIiwiX2NhbGxlZSIsImV2ZW50IiwicGVyaW9kIiwibG9hZGluZ092ZXJsYXkiLCJyZXNwb25zZSIsImRhdGEiLCJfY2FsbGVlJCIsIl9jb250ZXh0IiwiY3VycmVudFRhcmdldCIsImRhdGFzZXQiLCJlbGVtZW50IiwicXVlcnlTZWxlY3RvciIsInN0eWxlIiwiZGlzcGxheSIsImZldGNoIiwiY29uY2F0IiwicmVmcmVzaFVybFZhbHVlIiwianNvbiIsInVwZGF0ZVN0YXRzIiwicmV2ZW51ZVN0YXRzIiwidXBkYXRlQ2hhcnRzIiwidDAiLCJlcnJvciIsInJlZnJlc2hEYXRhIiwiX3giLCJ0b2dnbGVUaGVtZSIsImRvY3VtZW50IiwiYm9keSIsImNsYXNzTGlzdCIsInRvZ2dsZSIsImlzRGFyayIsImNvbnRhaW5zIiwibG9jYWxTdG9yYWdlIiwic2V0SXRlbSIsInVwZGF0ZUNoYXJ0c1RoZW1lIiwiZ2V0SXRlbSIsImFkZCIsInRoZW1lIiwiY29sb3IiLCJncmlkQ29sb3IiLCJwdXJjaGFzZUNoYXJ0VGFyZ2V0Iiwic2VudGltZW50Q2hhcnRUYXJnZXQiLCJoZWF0bWFwQ2hhcnRUYXJnZXQiLCJjYW52YXMiLCJjaGFydCIsImdldENoYXJ0Iiwib3B0aW9ucyIsInNjYWxlcyIsIngiLCJncmlkIiwidGlja3MiLCJ1cGRhdGUiLCJzdGF0cyIsInN0YXRzVGFyZ2V0cyIsInN0YXQiLCJpbmNsdWRlcyIsInRleHRDb250ZW50IiwiSW50bCIsIk51bWJlckZvcm1hdCIsImN1cnJlbmN5IiwiZm9ybWF0IiwicHVyY2hhc2VDaGFydCIsInRyZW5kcyIsImxhYmVscyIsIm1hcCIsIml0ZW0iLCJkYXRlIiwiZGF0YXNldHMiLCJwdXJjaGFzZXMiLCJyZXZlbnVlIiwiX3RoaXMiLCJzZXRJbnRlcnZhbCIsInVwZGF0ZUludGVydmFsVmFsdWUiLCJpbml0aWFsaXplQW5pbWF0aW9ucyIsImZyb20iLCJzdGF0Q2FyZFRhcmdldHMiLCJkdXJhdGlvbiIsIm9wYWNpdHkiLCJzdGFnZ2VyIiwiZWFzZSIsImNhcmQiLCJhZGRFdmVudExpc3RlbmVyIiwidG8iLCJzY2FsZSIsImluaXRpYWxpemVBT1MiLCJpbml0Iiwib25jZSIsIm9mZnNldCIsInNob3dDb25maXJtYXRpb24iLCJwcmV2ZW50RGVmYXVsdCIsImZpcmUiLCJ0aXRsZSIsInRleHQiLCJpY29uIiwic2hvd0NhbmNlbEJ1dHRvbiIsImNvbmZpcm1CdXR0b25Db2xvciIsImNhbmNlbEJ1dHRvbkNvbG9yIiwiY29uZmlybUJ1dHRvblRleHQiLCJyZXN1bHQiLCJpc0NvbmZpcm1lZCIsInRhcmdldCIsImNsb3Nlc3QiLCJzdWJtaXQiLCJyZWZyZXNoVXJsIiwidXBkYXRlSW50ZXJ2YWwiLCJkZWZhdWx0Il0sInNvdXJjZVJvb3QiOiIifQ==