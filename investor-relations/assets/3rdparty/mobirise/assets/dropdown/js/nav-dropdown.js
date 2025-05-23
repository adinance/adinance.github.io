(function (c) {
	var l = c.fn.navDropdown,
		g = { ESC: 27, LEFT: 37, UP: 38, RIGHT: 39, DOWN: 40 },
		// m = { XS: 544, SM: 768, MD: 992, LG: 1200, XL: Infinity },
        m = { XS: 544, SM: 768, MD: 1024, LG: 1200, XL: Infinity },
		h = (function () {
			function a(a, d) {
				"length" in a || (a = [a]);
				this.props = {};
				this.length = a.length;
				d && ((this.prevItem = d), c.extend(this.props, d.props));
				for (var e = 0; e < a.length; e++) this[e] = a[e];
			}
			a.prototype.eq = function (b) {
				return new a(this[b] ? this[b] : [], this);
			};
			a.prototype.parent = function () {
				return new a(
					c(this).map(function () {
						var b = new a(this);
						return b.is(":upper")
							? null
							: c(b.is(":toggle") ? this.parentNode.parentNode : this)
									.closest(".dropdown")
									.find('>[data-toggle="dropdown-submenu"]')[0];
					}),
					this
				);
			};
			a.prototype.parents = function (b) {
				var d = c(this)
					.map(function () {
						return new a(this).is(":toggle") ? this.parentNode : this;
					})
					.parentsUntil(".nav-dropdown", ".dropdown");
				":upper" === b && (d = d.last());
				d = d.find('>[data-toggle="dropdown-submenu"]');
				return new a(d, this);
			};
			a.prototype.children = function (b) {
				var d = [];
				c(this).each(function () {
					var e,
						f = new a(this);
					if (f.is(":root")) e = c(this);
					else if (f.is(":toggle"))
						e = c(this).parent().find(">.dropdown-menu");
					else return;
					(b
						? e.find("a")
						: f.is(":root")
						? e.find(">li>a")
						: e.find(">a, >.dropdown>a")
					).each(function () {
						(b && !this.offsetWidth && !this.offsetHeight) ||
							this.disabled ||
							c(this).is("[data-button]") ||
							c(this).hasClass("disabled") ||
							~c.inArray(this, d) ||
							d.push(this);
					});
				});
				return new a(d, this);
			};
			a.prototype.root = function () {
				return new a(c(this).closest(".nav-dropdown"), this);
			};
			a.prototype.jump = function (b) {
				b = b || "next";
				if (!this.length) return new a([], this);
				var d;
				d = this.eq(0);
				d =
					this.is(":flat") || d.is(":upper")
						? d.root().children(this.is(":flat"))
						: d.parent().children();
				var e = c.inArray(this[0], d);
				if (!d.length || !~e) return new a([], this);
				if ("next" == b) {
					e += 1;
					if (e < d.length) return new a(d[e], this);
					b = "first";
				} else if ("prev" == b) {
					--e;
					if (0 <= e) return new a(d[e], this);
					b = "last";
				}
				return "first" == b
					? new a(d[0], this)
					: "last" == b
					? new a(d[d.length - 1], this)
					: new a([], this);
			};
			a.prototype.next = function () {
				return this.jump("next");
			};
			a.prototype.prev = function () {
				return this.jump("prev");
			};
			a.prototype.first = function () {
				return this.jump("first");
			};
			a.prototype.last = function () {
				return this.jump("last");
			};
			a.prototype.prop = function (a, d) {
				return arguments.length
					? 1 < arguments.length
						? ((this.props[a] = d), this)
						: "object" == typeof arguments[0]
						? (c.extend(this.props, arguments[0]), this)
						: a in this.props
						? this.props[a]
						: null
					: c.extend({}, this.props);
			};
			a.prototype.removeProp = function (a) {
				delete this.props[a];
				return this;
			};
			a.prototype.is = function (a) {
				for (
					var d = c(this), e = (a || "").split(/(?=[*#.\[:\s])/);
					(a = e.pop());

				)
					switch (a) {
						case ":root":
							if (!d.is(".nav-dropdown")) return !1;
							break;
						case ":upper":
							if (!d.parent().parent().is(".nav-dropdown")) return !1;
							break;
						case ":opened":
						case ":closed":
							if ((":opened" == a) != d.parent().hasClass("open")) return !1;
						case ":toggle":
							if (!d.is('[data-toggle="dropdown-submenu"]')) return !1;
							break;
						default:
							if (!this.props[a]) return !1;
					}
				return !0;
			};
			a.prototype.open = function () {
				this.is(":closed") && this.click();
				return this;
			};
			a.prototype.close = function () {
				this.is(":opened") && this.click();
				return this;
			};
			a.prototype.focus = function () {
				this.length && this[0].focus();
				return this;
			};
			a.prototype.click = function () {
				this.length && c(this[0]).trigger("click");
				return this;
			};
			return function (b) {
				return new a(b);
			};
		})(),
		f = function (a) {
			this._element = a;
			c(this._element).on("click.bs.nav-dropdown", this.toggle);
		};
	f.prototype.toggle = function (a) {
		if (this.disabled || c(this).hasClass("disabled")) return !1;
		a = c(this.parentNode);
		var b = a.hasClass("open"),
			d = f._isCollapsed(c(this).closest(".nav-dropdown"));
		f._clearMenus(
			c.Event("click", { target: this, data: { toggles: d ? [this] : null } })
		);
		if (b) return !1;
		"ontouchstart" in document.documentElement &&
			!a.closest(".dropdown.open").length &&
			((b = document.createElement("div")),
			(b.className = "dropdown-backdrop"),
			c(b).insertBefore(c(this).closest(".nav-dropdown")),
			c(b).on("click", f._clearMenus));
		b = { relatedTarget: this };
		d = c.Event("show.bs.nav-dropdown", b);
		a.trigger(d);
		if (d.isDefaultPrevented()) return !1;
		this.focus();
		this.setAttribute("aria-expanded", "true");
		a.toggleClass("open");
		a.trigger(c.Event("shown.bs.nav-dropdown", b));
		return !1;
	};
	f.prototype.dispose = function () {
		c.removeData(this._element, "bs.nav-dropdown");
		c(this._element).off(".bs.nav-dropdown");
		this._element = null;
	};
	f._clearMenus = function (a) {
		a = a || {};
		if (3 !== a.which) {
			var b,
				d = function () {
					return !1;
				};
			if (a.target) {
				if (this === document)
					if (c(a.target).is("a:not([disabled], .disabled)"))
						b = c.Event("collapse.bs.nav-dropdown", {
							relatedTarget: a.target,
						});
					else {
						var e =
							(a.targetWrapper && c(a.targetWrapper).find(".nav-dropdown")) ||
							c(a.target).closest(".nav-dropdown");
						if (f._isCollapsed(e)) return;
					}
				else if (
					c(a.target).hasClass("dropdown-backdrop") &&
					((e = c(a.target).next()), e.is(".nav-dropdown") && f._isCollapsed(e))
				)
					return;
				c(a.target).is('[data-toggle="dropdown-submenu"]')
					? (d = c(a.target.parentNode)
							.parents(".dropdown")
							.find('>[data-toggle="dropdown-submenu"]'))
					: c(".dropdown-backdrop").remove();
			}
			d =
				(a.data &&
					a.data.toggles &&
					c(a.data.toggles)
						.parent()
						.find('[data-toggle="dropdown-submenu"]')) ||
				c.makeArray(c('[data-toggle="dropdown-submenu"]').not(d));
			for (e = 0; e < d.length; e++) {
				var g = d[e].parentNode,
					h = { relatedTarget: d[e] };
				if (
					c(g).hasClass("open") &&
					("click" !== a.type ||
						!/input|textarea/i.test(a.target.tagName) ||
						!c.contains(g, a.target))
				) {
					var k = c.Event("hide.bs.nav-dropdown", h);
					c(g).trigger(k);
					k.isDefaultPrevented() ||
						(d[e].setAttribute("aria-expanded", "false"),
						c(g)
							.removeClass("open")
							.trigger(c.Event("hidden.bs.nav-dropdown", h)));
				}
			}
			b && c(document).trigger(b);
		}
	};
	f._dataApiKeydownHandler = function (a) {
		if (!/input|textarea/i.test(a.target.tagName)) {
			var b, d;
			for (d in g) if ((b = g[d] === a.which)) break;
			b &&
				(a.preventDefault(),
				a.stopPropagation(),
				a.which == g.ESC
					? f._isCollapsed(this) ||
					  ((a = c(a.target)
							.parents(".dropdown.open")
							.last()
							.find('>[data-toggle="dropdown-submenu"]')),
					  f._clearMenus(),
					  a.trigger("focus"))
					: "A" == a.target.tagName &&
					  ((b = h(a.target)),
					  b.prop(":flat", f._isCollapsed(b.root())),
					  b.is(":flat")
							? a.which === g.DOWN || a.which === g.UP
								? b[a.which === g.UP ? "prev" : "next"]().focus()
								: a.which === g.LEFT
								? b.is(":opened")
									? b.close()
									: b.parent().close().focus()
								: a.which === g.RIGHT && b.is(":toggle") && b.open()
							: b.is(":upper")
							? a.which === g.LEFT || a.which === g.RIGHT
								? (b[a.which === g.LEFT ? "prev" : "next"]().focus().open(),
								  b.is(":toggle") && b.close())
								: (a.which !== g.DOWN && a.which !== g.UP) ||
								  !b.is(":toggle") ||
								  b.children()[a.which === g.DOWN ? "first" : "last"]().focus()
							: a.which === g.LEFT
							? ((a = b.parent()),
							  a.is(":upper")
									? a.close().prev().focus().open()
									: a.focus().close())
							: a.which === g.RIGHT
							? ((a = b.children()),
							  a.length
									? (b.open(), a.first().focus())
									: b.parents(":upper").close().next().focus().open())
							: (a.which !== g.DOWN && a.which !== g.UP) ||
							  b[a.which === g.UP ? "prev" : "next"]().focus()));
		}
	};
	f._isCollapsed = function (a) {
		var b;
		a.length && (a = a[0]);
		return (
			a &&
			(b = /navbar-toggleable-(xs|sm|md|lg|xl)/.exec(a.className)) &&
			window.innerWidth < m[b[1].toUpperCase()]
		);
	};
	f._dataApiResizeHandler = function () {
		c(".nav-dropdown").each(function () {
			var a = f._isCollapsed(this);
			c(this).find(".dropdown").removeClass("open");
			c(this).find('[aria-expanded="true"]').attr("aria-expanded", "false");
			var b = c(".dropdown-backdrop")[0];
			b && b.parentNode.removeChild(b);
			a != c(this).hasClass("nav-dropdown-sm") &&
				(a
					? c(this).addClass("nav-dropdown-sm")
					: c(this).removeClass("nav-dropdown-sm"));
		});
	};
	c.fn.navDropdown = function (a) {
		return this.each(function () {
			var b = c(this).data("bs.nav-dropdown");
			b || c(this).data("bs.nav-dropdown", (b = new f(this)));
			if ("string" === typeof a) {
				if (void 0 === b[a]) throw Error('No method named "' + a + '"');
				b[a].call(this);
			}
		});
	};
	c.fn.navDropdown.noConflict = function () {
		c.fn.navDropdown = l;
		return this;
	};
	c.fn.navDropdown.Constructor = f;
	c.fn.navDropdown.$$ = h;
	c(window).on(
		"resize.bs.nav-dropdown.data-api ready.bs.nav-dropdown.data-api",
		f._dataApiResizeHandler
	);
	c(document)
		.on(
			"keydown.bs.nav-dropdown.data-api",
			".nav-dropdown",
			f._dataApiKeydownHandler
		)
		.on("collapse.bs.navbar-dropdown", f._clearMenus)
		.on("click.bs.nav-dropdown.data-api", f._clearMenus)
		.on(
			"click.bs.nav-dropdown.data-api",
			'[data-toggle="dropdown-submenu"]',
			f.prototype.toggle
		)
		.on("click.bs.nav-dropdown.data-api", ".dropdown form", function (a) {
			a.stopPropagation();
		});
	c(window).trigger("ready.bs.nav-dropdown");
})(jQuery);
