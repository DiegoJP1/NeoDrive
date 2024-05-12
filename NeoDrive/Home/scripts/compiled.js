"use strict";
import React, { useState } from 'react';
var _reactTransitionGroup = require("react-transition-group");
var _react = _interopRequireDefault(require("react"));
var _propTypes = _interopRequireDefault(require("prop-types"));
var _bezierEasing = _interopRequireDefault(require("bezier-easing"));
var _reactDom = _interopRequireDefault(require("react-dom"));
function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { "default": obj }; }
function _typeof(o) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (o) { return typeof o; } : function (o) { return o && "function" == typeof Symbol && o.constructor === Symbol && o !== Symbol.prototype ? "symbol" : typeof o; }, _typeof(o); }
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }
function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, _toPropertyKey(descriptor.key), descriptor); } }
function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, "prototype", { writable: false }); return Constructor; }
function _callSuper(t, o, e) { return o = _getPrototypeOf(o), _possibleConstructorReturn(t, _isNativeReflectConstruct() ? Reflect.construct(o, e || [], _getPrototypeOf(t).constructor) : o.apply(t, e)); }
function _possibleConstructorReturn(self, call) { if (call && (_typeof(call) === "object" || typeof call === "function")) { return call; } else if (call !== void 0) { throw new TypeError("Derived constructors may only return object or undefined"); } return _assertThisInitialized(self); }
function _assertThisInitialized(self) { if (self === void 0) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return self; }
function _isNativeReflectConstruct() { try { var t = !Boolean.prototype.valueOf.call(Reflect.construct(Boolean, [], function () {})); } catch (t) {} return (_isNativeReflectConstruct = function _isNativeReflectConstruct() { return !!t; })(); }
function _getPrototypeOf(o) { _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf.bind() : function _getPrototypeOf(o) { return o.__proto__ || Object.getPrototypeOf(o); }; return _getPrototypeOf(o); }
function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function"); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, writable: true, configurable: true } }); Object.defineProperty(subClass, "prototype", { writable: false }); if (superClass) _setPrototypeOf(subClass, superClass); }
function _setPrototypeOf(o, p) { _setPrototypeOf = Object.setPrototypeOf ? Object.setPrototypeOf.bind() : function _setPrototypeOf(o, p) { o.__proto__ = p; return o; }; return _setPrototypeOf(o, p); }
function _defineProperty(obj, key, value) { key = _toPropertyKey(key); if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }
function _toPropertyKey(t) { var i = _toPrimitive(t, "string"); return "symbol" == _typeof(i) ? i : i + ""; }
function _toPrimitive(t, r) { if ("object" != _typeof(t) || !t) return t; var e = t[Symbol.toPrimitive]; if (void 0 !== e) { var i = e.call(t, r || "default"); if ("object" != _typeof(i)) return i; throw new TypeError("@@toPrimitive must return a primitive value."); } return ("string" === r ? String : Number)(t); }
var roadsterFloorImg = 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/1780138/roadster-floor.png',
  roadsterImg = 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/1780138/roadster-car.png',
  truckFloorImg = 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/1780138/truck-floor.png',
  truckImg = 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/1780138/truck-car.png';
var model3img = 'https://res-console.cloudinary.com/dm2uezxs1/thumbnails/transform/v1/image/upload/Y19zY2FsZSxoXzEwODAsd18xMzYw/v1/TmVvRHJpdmUveWhuOG96NWFxaHBjYWViaXR0bmc=/template_primary';
var modelximg = 'https://res-console.cloudinary.com/dm2uezxs1/thumbnails/transform/v1/image/upload/ZV9pbXByb3ZlOm91dGRvb3IvY19zY2FsZSxoXzEwODAsd18xNjgw/v1/bWt6dWNoYnRlcmtobWJ4cDJseTk=/template_primary';
var modelYimg = "https://res-console.cloudinary.com/dm2uezxs1/thumbnails/transform/v1/image/upload/ZV9pbXByb3ZlOm91dGRvb3IvY19zY2FsZSxoXzEwODAsd18xNjgw/v1/YWJwMWZraHBkZ2NyZ294bmw3bDA=/template_primary";
var modelSimg = 'https://res-console.cloudinary.com/dm2uezxs1/thumbnails/transform/v1/image/upload/ZV9pbXByb3ZlOm91dGRvb3IvY19zY2FsZSxoXzEwODAsd18xNjgw/v1/dGVmdndtYXJsazNjcDBmdXF6cTI=/template_primary';
var Cybertruckimg = 'https://res-console.cloudinary.com/dm2uezxs1/thumbnails/transform/v1/image/upload/ZV9pbXByb3ZlOm91dGRvb3IvY29fcmdiOjAwMDAwMCxlX2NvbG9yaXplOjQvY19zY2FsZSxoXzEwODAsd18xNjgw/v1/b3Z1N3Q1cG5zOHppYXdudHh2Zmg=/template_primary';
var slides = [{
  id: 1,
  name: "Model S",
  desc: "Un símbolo de elegancia, rendimiento y sostenibilidad",
  color: "#1900ff",
  imgUrl: modelSimg,
  topSpeed: 321,
  mph: 2.1,
  mileRange: 863,
  bckgHeight: 300,
  carShadowHeight: 300,
  shadowOpacity: 0.2
}, {
  id: 2,
  name: "Model Y",
  desc: "Definiendo el futuro con estilo, innovación y sostenibilidad  ",
  color: "#5edfed",
  imgUrl: modelYimg,
  topSpeed: 217,
  mph: 3.17,
  mileRange: 497,
  bckgHeight: 390,
  carShadowHeight: 400,
  shadowOpacity: 0.2
}, {
  id: 3,
  name: "Model X",
  desc: "Elevando la experiencia de conducción con lujo y tecnología",
  color: "#edd05e",
  imgUrl: modelximg,
  topSpeed: 262,
  mph: 2.6,
  mileRange: 580,
  bckgHeight: 250,
  carShadowHeight: 0,
  shadowOpacity: 0.5
}, {
  id: 4,
  name: "Model 3",
  desc: "estilo, tecnología sostenibilidad y innovacion ",
  color: "#18e23a",
  imgUrl: model3img,
  topSpeed: 261,
  mph: 3.3,
  mileRange: 678,
  bckgHeight: 300,
  carShadowHeight: 250,
  shadowOpacity: 0.2
}, {
  id: 5,
  name: "Roadster",
  desc: "Más que un auto, es la vanguardia del futuro",
  color: "#ee0101",
  imgFloorUrl: roadsterFloorImg,
  imgUrl: roadsterImg,
  topSpeed: 400,
  mph: 1.1,
  mileRange: 1000,
  bckgHeight: 340,
  carShadowHeight: 150,
  shadowOpacity: 0.5
}, {
  id: 6,
  name: "Semi truck",
  desc: "Revolucionando el transporte con potencia y innovación ",
  color: "#0047fd",
  imgFloorUrl: truckFloorImg,
  imgUrl: truckImg,
  topSpeed: 105,
  mph: 20,
  mileRange: 500,
  bckgHeight: 390,
  carShadowHeight: 400,
  shadowOpacity: 0.2
}, {
  id: 7,
  name: "Cybertruck",
  desc: "Diseño disruptivo, innovación sin límites y el futuro mismo",
  color: "#ff5500",
  imgUrl: Cybertruckimg,
  topSpeed: 209,
  mph: 2.7,
  mileRange: 705,
  bckgHeight: 390,
  carShadowHeight: 400,
  shadowOpacity: 0.2
}];
var SetCSSVariables = /*#__PURE__*/function (_React$Component) {
  function SetCSSVariables() {
    _classCallCheck(this, SetCSSVariables);
    return _callSuper(this, SetCSSVariables, arguments);
  }
  _inherits(SetCSSVariables, _React$Component);
  return _createClass(SetCSSVariables, [{
    key: "componentWillReceiveProps",
    value: function componentWillReceiveProps(props) {
      Object.keys(props.cssVariables).forEach(function (key) {
        document.documentElement.style.setProperty(key, props.cssVariables[key]);
      });
    }
  }, {
    key: "render",
    value: function render() {
      return this.props.children;
    }
  }]);
}(_react["default"].Component);
_defineProperty(SetCSSVariables, "PropTypes", {
  cssVariables: _propTypes["default"].object.isRequired,
  className: _propTypes["default"].string
});
function SlideAside(props) {
  var activeCar = props.activeCar;
  return /*#__PURE__*/_react["default"].createElement("div", {
    className: "tesla-slide-aside"
  }, /*#__PURE__*/_react["default"].createElement("h1", {
    className: "tesla-slide-aside__wholename"
  }, /*#__PURE__*/_react["default"].createElement("span", null, "Tesla"), /*#__PURE__*/_react["default"].createElement(_reactTransitionGroup.TransitionGroup, {
    component: "span",
    className: "tesla-slide-aside__name"
  }, /*#__PURE__*/_react["default"].createElement(_reactTransitionGroup.CSSTransition, {
    key: activeCar.name,
    timeout: {
      enter: 800,
      exit: 1000
    },
    className: "tesla-slide-aside__name-part",
    classNames: "tesla-slide-aside__name-part-",
    mountOnEnter: true,
    unmountOnExit: true
  }, /*#__PURE__*/_react["default"].createElement("span", null, activeCar.name)))), /*#__PURE__*/_react["default"].createElement(_reactTransitionGroup.TransitionGroup, {
    className: "tesla-slide-aside__desc"
  }, /*#__PURE__*/_react["default"].createElement(_reactTransitionGroup.CSSTransition, {
    key: activeCar.desc,
    timeout: {
      enter: 900,
      exit: 1200
    },
    className: "tesla-slide-aside__desc-text",
    classNames: "tesla-slide-aside__desc-text-",
    mountOnEnter: true,
    unmountOnExit: true
  }, /*#__PURE__*/_react["default"].createElement("p", null, activeCar.desc))), /*#__PURE__*/_react["default"].createElement("div", {
    className: "tesla-slide-aside__button"
  }, /*#__PURE__*/_react["default"].createElement("button", {
    id: activeCar.name,
    className: "button"
  }, "Ver mas"   ), /*#__PURE__*/_react["default"].createElement(_reactTransitionGroup.TransitionGroup, null, /*#__PURE__*/_react["default"].createElement(_reactTransitionGroup.CSSTransition, {
    key: activeCar.color,
    timeout: {
      enter: 800,
      exit: 1000
    },
    mountOnEnter: true,
    unmountOnExit: true,
    classNames: "button__border-"
  }, /*#__PURE__*/_react["default"].createElement(SetCSSVariables, {
    cssVariables: {
      '--btn-color': activeCar.color
    }
  }, /*#__PURE__*/_react["default"].createElement("span", {
    className: "button__border"
  }))))));
}
SlideAside.PropTypes = {
  activeCar: _propTypes["default"].object.isRequired
};

function _animate(render, duration, easing) {
  var next = arguments.length > 3 && arguments[3] !== undefined ? arguments[3] : function () {
    return null;
  };
  var start = Date.now();
  (function loop() {
    var current = Date.now(),
      delta = current - start,
      step = delta / duration;
    if (step > 1) {
      render(1);
      next();
    } else {
      requestAnimationFrame(loop);
      render(easing(step * 2));
    }
  })();
}
var myEasing = (0, _bezierEasing["default"])(.4, -0.7, .1, 1.5);
var AnimValue = /*#__PURE__*/function (_React$Component2) {
  function AnimValue() {
    var _this;
    _classCallCheck(this, AnimValue);
    for (var _len = arguments.length, args = new Array(_len), _key = 0; _key < _len; _key++) {
      args[_key] = arguments[_key];
    }
    _this = _callSuper(this, AnimValue, [].concat(args));
    _defineProperty(_this, "node", null);
    _defineProperty(_this, "timeout", null);
    _defineProperty(_this, "setValue", function (value, step) {
      if (!_this.node) {
        return;
      }
      if (step === 1) {
        _this.node.style.opacity = 1;
      } else {
        _this.node.style.opacity = 0.7;
      }
      _this.node.innerHTML = value;
    });
    return _this;
  }
  _inherits(AnimValue, _React$Component2);
  return _createClass(AnimValue, [{
    key: "animate",
    value: function animate(previousValue, newValue, applyFn) {
      var _this2 = this;
      window.clearTimeout(this.timeout);
      var diff = newValue - previousValue;
      var renderFunction = function renderFunction(step) {
        _this2.timeout = setTimeout(function () {
          applyFn(_this2.props.transformFn(previousValue + diff * step, step), step);
        }, _this2.props.delay);
      };
      _animate(renderFunction, this.props.duration, myEasing);
    }
  }, {
    key: "componentDidMount",
    value: function componentDidMount() {
      this.animate(0, this.props.value, this.setValue);
    }
  }, {
    key: "componentWillReceiveProps",
    value: function componentWillReceiveProps(props) {
      var previousValue = this.props.value;
      if (previousValue !== props.value) {
        this.animate(previousValue, props.value, this.setValue);
      }
    }
  }, {
    key: "componentWillUnmount",
    value: function componentWillUnmount() {
      window.clearTimeout(this.timeout);
      this.timeout = null;
    }
  }, {
    key: "render",
    value: function render() {
      var _this3 = this;
      return /*#__PURE__*/_react["default"].createElement("span", {
        className: this.props.className,
        children: "0",
        ref: function ref(node) {
          return _this3.node = node;
        }
      });
    }
  }]);
}(_react["default"].Component);
_defineProperty(AnimValue, "defaultProps", {
  delay: 0,
  duration: 800,
  transformFn: function transformFn(value) {
    return Math.floor(value);
  }
});
var AnimateValue = /*#__PURE__*/function (_React$Component3) {
  function AnimateValue() {
    _classCallCheck(this, AnimateValue);
    return _callSuper(this, AnimateValue, arguments);
  }
  _inherits(AnimateValue, _React$Component3);
  return _createClass(AnimateValue, [{
    key: "render",
    value: function render() {
      return /*#__PURE__*/_react["default"].createElement(AnimValue, {
        className: this.props.className,
        delay: this.props.delay,
        value: this.props.value,
        transformFn: function transformFn(value, step) {
          return step === 1 ? value % 1 != 0 ? value.toFixed(1) : value : Math.abs(Math.floor(value));
        }
      });
    }
  }]);
}(_react["default"].Component);
var DELAY_TOP_SPEED = 200,
  DELAY_MPH = 700,
  DELAY_MILE_RANG = 1200;
var SlideParams = /*#__PURE__*/function (_React$Component4) {
  function SlideParams() {
    _classCallCheck(this, SlideParams);
    return _callSuper(this, SlideParams, arguments);
  }
  _inherits(SlideParams, _React$Component4);
  return _createClass(SlideParams, [{
    key: "componentWillReceiveProps",
    value: function componentWillReceiveProps(props) {
      if (!props.animationForward) {
        DELAY_TOP_SPEED = 1200;
        DELAY_MILE_RANG = 200;
      } else {
        DELAY_TOP_SPEED = 200;
        DELAY_MILE_RANG = 1200;
      }
    }
  }, {
    key: "render",
    value: function render() {
      var activeCar = this.props.activeCar;
      return /*#__PURE__*/_react["default"].createElement("div", {
        className: "tesla-slide-params"
      }, /*#__PURE__*/_react["default"].createElement("ul", {
        className: "tesla-slide-params__list"
      }, /*#__PURE__*/_react["default"].createElement("li", {
        className: "tesla-slide-params__item"
      }, /*#__PURE__*/_react["default"].createElement("div", {
        className: "tesla-slide-params__wrapper"
      }, /*#__PURE__*/_react["default"].createElement("span", {
        className: "tesla-slide-params__prefix"
      }, "+"), /*#__PURE__*/_react["default"].createElement(AnimateValue, {
        className: "tesla-slide-params__value",
        value: activeCar.topSpeed,
        delay: DELAY_TOP_SPEED
      }), /*#__PURE__*/_react["default"].createElement("span", {
        className: "tesla-slide-params__sufix"
      }, "Km/h")), /*#__PURE__*/_react["default"].createElement("p", {
        className: "tesla-slide-params__name"
      }, "Velocidad Maxima")), /*#__PURE__*/_react["default"].createElement("li", {
        className: "tesla-slide-params__item"
      }, /*#__PURE__*/_react["default"].createElement("div", {
        className: "tesla-slide-params__wrapper"
      }, /*#__PURE__*/_react["default"].createElement(AnimateValue, {
        className: "tesla-slide-params__value",
        value: activeCar.mph,
        delay: DELAY_MPH
      }), /*#__PURE__*/_react["default"].createElement("span", {
        className: "tesla-slide-params__sufix"
      }, "s")), /*#__PURE__*/_react["default"].createElement("p", {
        className: "tesla-slide-params__name"
      }, "0-100 Km/h")), /*#__PURE__*/_react["default"].createElement("li", {
        className: "tesla-slide-params__item"
      }, /*#__PURE__*/_react["default"].createElement("div", {
        className: "tesla-slide-params__wrapper"
      }, /*#__PURE__*/_react["default"].createElement(AnimateValue, {
        className: "tesla-slide-params__value",
        value: activeCar.mileRange,
        delay: DELAY_MILE_RANG
      }), /*#__PURE__*/_react["default"].createElement("span", {
        className: "tesla-slide-params__sufix"
      }, "Kms")), /*#__PURE__*/_react["default"].createElement("p", {
        className: "tesla-slide-params__name"
      }, "Autonomia"))));
    }
  }]);
}(_react["default"].Component);
_defineProperty(SlideParams, "PropTypes", {
  activeCar: _propTypes["default"].object.isRequired,
  animationForward: _propTypes["default"].bool.isRequired
});
var Slide = /*#__PURE__*/function (_React$Component5) {
  function Slide() {
    var _this4;
    _classCallCheck(this, Slide);
    for (var _len2 = arguments.length, args = new Array(_len2), _key2 = 0; _key2 < _len2; _key2++) {
      args[_key2] = arguments[_key2];
    }
    _this4 = _callSuper(this, Slide, [].concat(args));
    _defineProperty(_this4, "handleEnter", function (e) {
      _this4.props.setAnimationState(_this4.props.ANIMATION_PHASES.STOP);
    });
    return _this4;
  }
  _inherits(Slide, _React$Component5);
  return _createClass(Slide, [{
    key: "render",
    value: function render() {
      var _this$props = this.props,
        activeSlide = _this$props.activeSlide,
        animationForward = _this$props.animationForward;
      return /*#__PURE__*/_react["default"].createElement("div", {
        className: "tesla-slide ".concat(animationForward ? 'animation-forward' : 'animation-back')
      }, /*#__PURE__*/_react["default"].createElement(SlideAside, {
        activeCar: activeSlide
      }), /*#__PURE__*/_react["default"].createElement(_reactTransitionGroup.TransitionGroup, null, /*#__PURE__*/_react["default"].createElement(_reactTransitionGroup.CSSTransition, {
        key: activeSlide.name,
        timeout: {
          enter: 800,
          exit: 1000
        },
        classNames: "tesla-slide__bckg-",
        mountOnEnter: true,
        unmountOnExit: true
      }, /*#__PURE__*/_react["default"].createElement(SetCSSVariables, {
        cssVariables: {
          '--car-color': activeSlide.color,
          '--bckg-height': activeSlide.bckgHeight + 'px',
          '--shadow-opacity': activeSlide.shadowOpacity,
          '--car-shadow-height': activeSlide.carShadowHeight + 'px'
        }
      }, /*#__PURE__*/_react["default"].createElement("div", {
        className: "tesla-slide__bckg"
      }, /*#__PURE__*/_react["default"].createElement("div", {
        className: "tesla-slide__bckg-fill"
      }))))), /*#__PURE__*/_react["default"].createElement(_reactTransitionGroup.TransitionGroup, null, /*#__PURE__*/_react["default"].createElement(_reactTransitionGroup.CSSTransition, {
        key: activeSlide.name,
        timeout: {
          enter: 700,
          exit: 1200
        },
        classNames: "tesla-slide__img-",
        mountOnEnter: true,
        unmountOnExit: true,
        onEntered: this.handleEnter
      }, /*#__PURE__*/_react["default"].createElement("div", {
        className: "tesla-slide__img"
      }, /*#__PURE__*/_react["default"].createElement("img", {
        className: "tesla-slide__img-floor",
        src: activeSlide.imgFloorUrl,
        alt: activeSlide.name
      }), /*#__PURE__*/_react["default"].createElement("img", {
        className: "tesla-slide__img-car",
        src: activeSlide.imgUrl,
        alt: activeSlide.name,
        id: activeSlide.name
      })))), /*#__PURE__*/_react["default"].createElement(SlideParams, {
        activeCar: activeSlide,
        animationForward: animationForward
      }));
    }
  }]);
}(_react["default"].Component);
_defineProperty(Slide, "PropTypes", {
  activeSlide: _propTypes["default"].object.isRequired,
  animationForward: _propTypes["default"].bool.isRequired,
  setAnimationState: _propTypes["default"].func.isRequired,
  ANIMATION_PHASES: _propTypes["default"].object.isRequired
});
var SliderNavigation = /*#__PURE__*/function (_React$Component6) {
  function SliderNavigation() {
    _classCallCheck(this, SliderNavigation);
    return _callSuper(this, SliderNavigation, arguments);
  }
  _inherits(SliderNavigation, _React$Component6);
  return _createClass(SliderNavigation, [{
    key: "render",
    value: function render() {
      var _this5 = this;
      return /*#__PURE__*/_react["default"].createElement("div", {
        className: "tesla-slider-navigation"
      }, /*#__PURE__*/_react["default"].createElement("ul", {
        className: "tesla-slider-navigation__list"
      }, this.props.carsNames.map(function (car) {
        return /*#__PURE__*/_react["default"].createElement("li", {
          key: car.id,
          className: "tesla-slider-navigation__item"
        }, /*#__PURE__*/_react["default"].createElement("a", {
          href: "#",
          onClick: function onClick(event) {
            event.preventDefault();
            _this5.props.setActiveSlide(_this5.props.carsNames.indexOf(car));
          },
          className: "tesla-slider-navigation__link ".concat(_this5.props.carsNames[_this5.props.activeSlide] === car ? 'tesla-slider-navigation__link--active' : ''),
          style: {
            color: _this5.props.carsNames[_this5.props.activeSlide] === car ? car.color : ''
          }
        }, car.name));
      })));
    }
  }]);
}(_react["default"].Component);
_defineProperty(SliderNavigation, "PropTypes", {
  setActiveSlide: _propTypes["default"].func.isRequired,
  carsNames: _propTypes["default"].array.isRequired
});
var mouseImg = 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/1780138/mouse.svg';
var ANIMATION_PHASES = {
  PENDING: 'PENDING',
  STOP: 'STOP'
};
var Slider = /*#__PURE__*/function (_React$Component7) {
  function Slider() {
    var _this6;
    _classCallCheck(this, Slider);
    for (var _len3 = arguments.length, args = new Array(_len3), _key3 = 0; _key3 < _len3; _key3++) {
      args[_key3] = arguments[_key3];
    }
    _this6 = _callSuper(this, Slider, [].concat(args));
    _defineProperty(_this6, "state", {
      activeSlide: 0,
      animationForward: true,
      slidesCount: slides.length,
      animationState: null
    });
    _defineProperty(_this6, "slider", {
      header: '',
      content: ''
    });
    _defineProperty(_this6, "setAnimationState", function (animationState) {
      return _this6.setState({
        animationState: animationState
      });
    });
    _defineProperty(_this6, "setActiveSlide", function (slideId) {
      _this6.setState({
        activeSlide: slideId,
        animationForward: _this6.state.activeSlide < slideId ? true : false
      });
      _this6.setAnimationState(ANIMATION_PHASES.PENDING);
    });
    _defineProperty(_this6, "timeout", null);
    _defineProperty(_this6, "handleScroll", function (e) {
      var sliderHeight = _this6.slider.content.clientHeight,
        headerHeight = _this6.slider.header.clientHeight;
      if (window.innerHeight < sliderHeight + headerHeight) {
        return; 
      }
      e.preventDefault();
      window.clearTimeout(_this6.timeout);
      _this6.timeout = setTimeout(function () {
        if (e.deltaY < 0 && _this6.state.activeSlide !== 0) {
          _this6.setActiveSlide(_this6.state.activeSlide - 1);
        }
        if (e.deltaY > 0 && _this6.state.activeSlide !== _this6.state.slidesCount - 1) {
          _this6.setActiveSlide(_this6.state.activeSlide + 1);
        }
      }, 50);
    });
    return _this6;
  }
  _inherits(Slider, _React$Component7);
  return _createClass(Slider, [{
    key: "componentDidMount",
    value: function componentDidMount() {
      this.setState({
        activeSlide: 3
      });
      this.setAnimationState(ANIMATION_PHASES.PENDING);
      this.slider.header = document.querySelector('.tesla-header');
      this.slider.content = document.querySelector('.tesla-slider');
      document.body.addEventListener('wheel', this.handleScroll);
    }
  }, {
    key: "componentWillUnmount",
    value: function componentWillUnmount() {
      document.body.removeEventListener('wheel', this.handleScroll);
      window.clearTimeout(this.timeout);
      this.timeout = null;
    }
  }, {
    key: "render",
    value: function render() {
      return /*#__PURE__*/_react["default"].createElement("div", {
        className: "tesla-slider"
      }, /*#__PURE__*/_react["default"].createElement(SliderNavigation, {
        activeSlide: this.state.activeSlide,
        setActiveSlide: this.setActiveSlide,
        carsNames: slides.map(function (slide) {
          return {
            id: slide.id,
            name: slide.name,
            color: slide.color
          };
        })
      }), /*#__PURE__*/_react["default"].createElement(Slide, {
        animationForward: this.state.animationForward,
        activeSlide: slides[this.state.activeSlide],
        animationState: this.state.animationState,
        setAnimationState: this.setAnimationState,
        ANIMATION_PHASES: ANIMATION_PHASES
      }), /*#__PURE__*/_react["default"].createElement("div", {
        className: "tesla-slider__scroll"
      }, /*#__PURE__*/_react["default"].createElement("img", {
        src: mouseImg,
        alt: ""
      })));
    }
  }]);
}(_react["default"].Component);
function Header() {
  return /*#__PURE__*/_react["default"].createElement("div", {
    className: "tesla-header"
  });
}
var App = /*#__PURE__*/function (_React$Component8) {
  function App() {
    _classCallCheck(this, App);
    return _callSuper(this, App, arguments);
  }
  _inherits(App, _React$Component8);
  return _createClass(App, [{
    key: "render",
    value: function render() {
      return /*#__PURE__*/_react["default"].createElement("div", {
        className: "container"
      }, /*#__PURE__*/_react["default"].createElement(Header, null), /*#__PURE__*/_react["default"].createElement(Slider, null));
    }
  }]);
}(_react["default"].Component);
_reactDom["default"].render( /*#__PURE__*/_react["default"].createElement(App, null), document.getElementById("root"));
