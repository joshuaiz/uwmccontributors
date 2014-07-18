/*
*   Copyright 2011 Georgios Migdos
*
*   Licensed under the Apache License, Version 2.0 (the "License");
*   you may not use this file except in compliance with the License.
*   You may obtain a copy of the License at
*
*       http://www.apache.org/licenses/LICENSE-2.0
*
*   Unless required by applicable law or agreed to in writing, software
*   distributed under the License is distributed on an "AS IS" BASIS,
*   WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
*   See the License for the specific language governing permissions and
*   limitations under the License.
*/function AwesomeChart(e) {
    var t = typeof e == "string" ? document.getElementById(e) : e;
    this.ctx = t.getContext("2d");
    this.width = this.ctx.canvas.width;
    this.height = this.ctx.canvas.height;
    this.numberOfDecimals = 0;
    this.proportionalSizes = !0;
    this.widthSizeFactor = this.width / 400;
    this.heightSizeFactor = this.height / 400;
    this.chartType = "bar";
    this.randomColors = !1;
    this.animate = !1;
    this.animationFrames = 60;
    this.marginTop = 10;
    this.marginBottom = 10;
    this.marginLeft = 10;
    this.marginRight = 10;
    this.labelMargin = 10;
    this.dataValueMargin = 20;
    this.titleMargin = 10;
    this.yAxisLabelMargin = 5;
    this.data = new Array;
    this.labels = new Array;
    this.colors = new Array;
    this.title = null;
    this.backgroundFillStyle = "rgba(255,255,255,0)";
    this.borderStrokeStyle = "rgba(255,255,255,0)";
    this.borderWidth = 1;
    this.labelFillStyle = "rgb(220, 36, 0)";
    this.labelFont = "sans-serif";
    this.labelFontHeight = 12;
    this.labelFontStyle = "";
    this.dataValueFillStyle = "#333";
    this.dataValueFont = "sans-serif";
    this.dataValueFontHeight = 15;
    this.dataValueFontStyle = "";
    this.titleFillStyle = "#333";
    this.titleFont = "sans-serif";
    this.titleFontHeight = 16;
    this.titleFontStyle = "bold";
    this.yAxisLabelFillStyle = "#333";
    this.yAxisLabelFont = "sans-serif";
    this.yAxisLabelFontHeight = 10;
    this.yAxisLabelFontStyle = "";
    var n = this.ctx.createLinearGradient(0, 0, 0, this.height);
    n.addColorStop(.2, "#fdfdfd");
    n.addColorStop(.8, "#ededed");
    this.chartBackgroundFillStyle = n;
    this.chartBorderStrokeStyle = "#999";
    this.chartBorderLineWidth = 1;
    this.chartHorizontalLineStrokeStyle = "#999";
    this.chartHorizontalLineWidth = 1;
    this.chartVerticalLineStrokeStyle = "#999";
    this.chartVerticalLineWidth = 1;
    this.chartMarkerSize = 5;
    this.chartPointRadius = 4;
    this.chartPointFillStyle = "rgb(150, 36, 0)";
    this.chartLineStrokeStyle = "rgba(150, 36, 0, 0.5)";
    this.chartLineWidth = 2;
    this.barFillStyle = "rgb(220, 36, 0)";
    this.barStrokeStyle = "#fff";
    this.barBorderWidth = 2;
    this.barShadowColor = "rgba(0, 0, 0, 0.5)";
    this.barShadowBlur = 5;
    this.barShadowOffsetX = 3;
    this.barShadowOffsetY = 0;
    this.barHGap = 20;
    this.barVGap = 20;
    this.explosionOffset = 20;
    this.pieFillStyle = "rgb(220, 36, 0)";
    this.pieStrokeStyle = "#fff";
    this.pieBorderWidth = 2;
    this.pieShadowColor = "rgba(0, 0, 0, 0.5)";
    this.pieShadowBlur = 5;
    this.pieShadowOffsetX = 3;
    this.pieShadowOffsetY = 0;
    this.pieStart = 0;
    this.pieTotal = null;
    this.generateRandomColor = function() {
        var e = new Array;
        for (var t = 0; t < 3; t++) e.push(Math.ceil(Math.random() * 150 + 50));
        return "rgb(" + e.join(",") + ")";
    };
    this.setChartDataFromJSON = function(e) {
        for (var t in e) {
            this.labels.push(t);
            this.data.push(e[t]);
        }
    };
    this.draw = function() {
        var e = this.ctx;
        e.lineCap = "round";
        var t = Math.min(this.widthSizeFactor, this.heightSizeFactor);
        if (this.proportionalSizes) {
            this.labelMargin = this.labelMargin * this.heightSizeFactor;
            this.dataValueMargin = this.dataValueMargin * this.heightSizeFactor;
            this.titleMargin = this.titleMargin * this.heightSizeFactor;
            this.yAxisLabelMargin = this.yAxisLabelMargin * this.heightSizeFactor;
            this.labelFontHeight = this.labelFontHeight * t;
            this.dataValueFontHeight = this.dataValueFontHeight * t;
            this.titleFontHeight = this.titleFontHeight * t;
            this.yAxisLabelFontHeight = this.yAxisLabelFontHeight * t;
            this.barHGap = this.barHGap * this.widthSizeFactor;
            this.barVGap = this.barHGap * this.heightSizeFactor;
            this.explosionOffset = this.explosionOffset * t;
        }
        if (this.randomColors) for (var n = 0; n < this.data.length; n++) this.colors[n] || (this.colors[n] = this.generateRandomColor());
        this.chartType == "pie" ? this.animate ? this.animatePieChart("pie") : this.drawPieChart(!1) : this.chartType == "ring" || this.chartType == "doughnut" ? this.animate ? this.animatePieChart("ring") : this.drawPieChart(!0) : this.chartType == "exploded pie" ? this.animate ? this.animatePieChart("exploded") : this.drawExplodedPieChart() : this.chartType == "horizontal bars" ? this.animate ? this.animateVerticalBarChart() : this.drawVerticalBarChart() : this.chartType == "pareto" ? this.drawParetoChart() : this.animate ? this.animateBarChart() : this.drawBarChart();
        this.drawTitleAndBorders();
    };
    this.drawTitleAndBorders = function() {
        var e = this.ctx;
        if (this.title != null) {
            e.font = this.titleFontStyle + " " + this.titleFontHeight + "px " + this.titleFont;
            e.fillStyle = this.titleFillStyle;
            e.textAlign = "center";
            e.textBaseline = "bottom";
            e.fillText(this.title, this.width / 2, this.marginTop + this.titleFontHeight, this.width - 10);
        }
        e.lineWidth = this.borderWidth;
        e.strokeStyle = this.borderStrokeStyle;
        e.strokeRect(0, 0, this.width, this.height);
        e.globalCompositeOperation = "destination-over";
        e.fillStyle = this.backgroundFillStyle;
        e.fillRect(0, 0, this.width, this.height);
        e.globalCompositeOperation = "source-over";
    };
    this.drawBarChart = function() {
        var e = this.ctx, t = this.data.length, n = this.data.max(), r = this.data.min(), i = (this.width - this.marginLeft - this.marginRight - (t - 1) * this.barHGap) / t, s = this.marginTop + this.labelMargin + this.labelFontHeight + this.dataValueMargin + this.dataValueFontHeight, o = this.height - this.marginBottom;
        this.title != null && (s += this.titleFontHeight + this.titleMargin);
        var u = this.height - this.marginBottom;
        if (r < 0) {
            o = this.height - this.marginBottom - this.labelMargin - this.labelFontHeight - this.dataValueMargin - this.dataValueFontHeight;
            u = o + (this.height - this.marginBottom - s - this.labelMargin - this.labelFontHeight - this.dataValueMargin - this.dataValueFontHeight) * r / (Math.abs(r) + n);
        }
        var a = Math.max(Math.abs(u - s), Math.abs(u - o)), f = Math.max(Math.abs(r), Math.abs(n)), l = this.marginLeft, c = u, h = 0, p = 0;
        for (var d = 0; d < this.data.length; d++) {
            p = this.data[d];
            h = p * a / f;
            this.colors[d] ? e.fillStyle = this.colors[d] : e.fillStyle = this.barFillStyle;
            e.strokeStyle = this.barStrokeStyle;
            e.lineWidth = this.barBorderWidth;
            e.beginPath();
            e.moveTo(l, c);
            e.lineTo(l, c - h);
            e.lineTo(l + i, c - h);
            e.lineTo(l + i, c);
            e.save();
            e.shadowOffsetX = this.barShadowOffsetX;
            e.shadowOffsetY = this.barShadowOffsetY;
            e.shadowBlur = this.barShadowBlur;
            e.shadowColor = this.barShadowColor;
            e.fill();
            e.restore();
            e.stroke();
            e.font = this.labelFontStyle + " " + this.labelFontHeight + "px " + this.labelFont;
            this.colors[d] ? e.fillStyle = this.colors[d] : e.fillStyle = this.labelFillStyle;
            e.textAlign = "center";
            if (this.labels[d]) if (p >= 0) {
                e.textBaseline = "bottom";
                e.fillText(this.labels[d], l + i / 2, u - h - this.labelMargin, i);
            } else {
                e.textBaseline = "top";
                e.fillText(this.labels[d], l + i / 2, u - h + this.labelMargin, i);
            }
            e.font = this.dataValueFontStyle + " " + this.dataValueFontHeight + "px " + this.dataValueFont;
            e.fillStyle = this.dataValueFillStyle;
            e.textAlign = "center";
            if (p >= 0) {
                e.textBaseline = "bottom";
                e.fillText(p, l + i / 2, u - h - this.labelMargin - this.dataValueMargin, i);
            } else {
                e.textBaseline = "top";
                e.fillText(p, l + i / 2, u - h + this.labelMargin + this.dataValueMargin, i);
            }
            l = l + i + this.barHGap;
        }
    };
    this.animateBarChart = function() {
        var e = this, t = this.animationFrames, n = 0, r = this.data.max(), i = this.data.min(), s = this.marginTop + this.labelMargin + this.labelFontHeight + this.dataValueMargin + this.dataValueFontHeight, o = barBottomY = this.height - this.marginBottom;
        this.title != null && (s += this.titleFontHeight + this.titleMargin);
        if (i < 0) {
            o = this.height - this.marginBottom - this.labelMargin - this.labelFontHeight - this.dataValueMargin - this.dataValueFontHeight;
            barBottomY = o + (this.height - this.marginBottom - s - this.labelMargin - this.labelFontHeight - this.dataValueMargin - this.dataValueFontHeight) * i / (Math.abs(i) + r);
        }
        var u = o - s, a = 0, f = 0, l = 0;
        if (i < 0) {
            var c = Math.max(Math.abs(barBottomY - s), Math.abs(barBottomY - o)), h = Math.max(Math.abs(i), Math.abs(r));
            l = Math.abs(i * c / h + this.labelMargin + this.labelFontHeight);
        }
        this.marginBottom += l;
        this.title != null ? this.titleMargin += u - l : this.marginTop += u - l;
        a = l / t;
        f = (u - l) / t;
        var p = function() {
            if (n++ < t) {
                e.marginBottom -= a;
                e.title != null ? e.titleMargin -= f : e.marginTop -= f;
                e.ctx.clearRect(0, 0, e.width, e.height);
                e.drawBarChart();
                e.drawTitleAndBorders();
                typeof window.requestAnimationFrame == "function" ? window.requestAnimationFrame(p) : typeof window.msRequestAnimationFrame == "function" ? window.msRequestAnimationFrame(p) : typeof window.webkitRequestAnimationFrame == "function" ? window.webkitRequestAnimationFrame(p) : window.mozRequestAnimationFrame ? window.mozRequestAnimationFrame(p) : setTimeout(p, 16.6666666);
            }
        };
        p();
    };
    this.drawVerticalBarChart = function() {
        var e = this.ctx;
        e.save();
        e.translate(this.width / 2, this.height / 2);
        e.rotate(Math.PI / 2);
        e.translate(-this.width / 2, -this.height / 2);
        var t = this.data.length, n = this.data.max(), r = this.data.min(), i = this.marginLeft;
        this.title != null && (i += this.titleFontHeight + this.titleMargin);
        var s = (this.width - i - this.marginRight - (t - 1) * this.barHGap) / t;
        e.font = this.labelFontStyle + " " + this.labelFontHeight + "px " + this.labelFont;
        var o = 0, u = 0;
        for (var a = 0; a < this.labels.length; a++) {
            u = e.measureText(this.labels[a]).width;
            u > o && (o = u);
        }
        e.font = this.dataValueFontStyle + " " + this.dataValueFontHeight + "px " + this.dataValueFont;
        var f = 0, l = 0;
        for (var a = 0; a < this.data.length; a++) {
            l = e.measureText(this.data[a]).width;
            l > f && (f = l);
        }
        var c = this.marginTop + Math.max(this.labelMargin + o, this.dataValueMargin + f), h = this.height - this.marginBottom, p = this.height - this.marginBottom;
        if (r < 0) {
            h = this.height - this.marginBottom - this.labelMargin - this.labelFontHeight - this.dataValueMargin - this.dataValueFontHeight;
            p = h + (this.height - this.marginBottom - c - this.labelMargin - this.labelFontHeight - this.dataValueMargin - this.dataValueFontHeight) * r / (Math.abs(r) + n);
        }
        var d = Math.max(Math.abs(p - c), Math.abs(p - h)), v = Math.max(Math.abs(r), Math.abs(n)), m = i, g = p, y = 0, b = 0;
        for (var a = 0; a < this.data.length; a++) {
            b = this.data[a];
            y = b * d / v;
            this.colors[a] ? e.fillStyle = this.colors[a] : e.fillStyle = this.barFillStyle;
            e.strokeStyle = this.barStrokeStyle;
            e.lineWidth = this.barBorderWidth;
            e.beginPath();
            e.moveTo(m, g);
            e.lineTo(m, g - y);
            e.lineTo(m + s, g - y);
            e.lineTo(m + s, g);
            e.save();
            e.shadowOffsetX = this.barShadowOffsetX;
            e.shadowOffsetY = this.barShadowOffsetY;
            e.shadowBlur = this.barShadowBlur;
            e.shadowColor = this.barShadowColor;
            e.fill();
            e.restore();
            e.stroke();
            e.font = this.labelFontStyle + " " + this.labelFontHeight + "px " + this.labelFont;
            this.colors[a] ? e.fillStyle = this.colors[a] : e.fillStyle = this.labelFillStyle;
            e.save();
            e.translate(m + s / 2, p - y);
            e.rotate(-Math.PI / 2);
            e.textBaseline = "top";
            if (this.labels[a]) if (b >= 0) {
                e.textAlign = "left";
                e.fillText(this.labels[a], this.labelMargin, 0);
            } else {
                e.textAlign = "right";
                e.fillText(this.labels[a], -this.labelMargin, 0);
            }
            e.font = this.dataValueFontStyle + " " + this.dataValueFontHeight + "px " + this.dataValueFont;
            e.fillStyle = this.dataValueFillStyle;
            e.textBaseline = "bottom";
            if (b >= 0) {
                e.textAlign = "left";
                e.fillText(b, this.labelMargin, 0);
            } else {
                e.textAlign = "right";
                e.fillText(b, -this.labelMargin, 0);
            }
            e.restore();
            m = m + s + this.barHGap;
        }
        e.restore();
    };
    this.animateVerticalBarChart = function() {
        var e = this, t = this.animationFrames, n = 0, r = this.data.max(), i = this.data.min(), s = this.data.length, o = this.ctx, u = this.marginLeft;
        marginTop = this.marginTop;
        marginTopCurrent = 0;
        this.title != null && (u += this.titleFontHeight + this.titleMargin);
        var a = (this.width - u - this.marginRight - (s - 1) * this.barHGap) / s;
        o.font = this.labelFontStyle + " " + this.labelFontHeight + "px " + this.labelFont;
        var f = 0, l = 0;
        for (var c = 0; c < this.labels.length; c++) {
            l = o.measureText(this.labels[c]).width;
            l > f && (f = l);
        }
        o.font = this.dataValueFontStyle + " " + this.dataValueFontHeight + "px " + this.dataValueFont;
        var h = 0, p = 0;
        for (var c = 0; c < s; c++) {
            p = o.measureText(this.data[c]).width;
            p > h && (h = p);
        }
        var d = this.marginTop + Math.max(this.labelMargin + f, this.dataValueMargin + h), v = this.height - this.marginBottom, m = this.height - this.marginBottom;
        if (i < 0) {
            v = this.height - this.marginBottom - this.labelMargin - this.labelFontHeight - this.dataValueMargin - this.dataValueFontHeight;
            m = v + (this.height - this.marginBottom - d - this.labelMargin - this.labelFontHeight - this.dataValueMargin - this.dataValueFontHeight) * i / (Math.abs(i) + r);
        }
        var g = Math.max(Math.abs(m - d), Math.abs(m - v)), y = Math.max(Math.abs(i), Math.abs(r)), b = 0;
        i < 0 && (b = Math.abs(i * g / y));
        var w = r * g / y + b, E = 0, S = 0;
        this.marginBottom += b;
        this.marginTop += w - b;
        E = b / t;
        S = (w - b) / t;
        var x = function() {
            if (n++ < t) {
                e.marginBottom -= E;
                e.marginTop -= S;
                e.ctx.clearRect(0, 0, e.width, e.height);
                e.drawVerticalBarChart();
                marginTopCurrent = e.marginTop;
                e.marginTop = marginTop;
                e.drawTitleAndBorders();
                e.marginTop = marginTopCurrent;
                typeof window.requestAnimationFrame == "function" ? window.requestAnimationFrame(x) : typeof window.msRequestAnimationFrame == "function" ? window.msRequestAnimationFrame(x) : typeof window.webkitRequestAnimationFrame == "function" ? window.webkitRequestAnimationFrame(x) : window.mozRequestAnimationFrame ? window.mozRequestAnimationFrame(x) : setTimeout(x, 16.6666666);
            }
        };
        x();
    };
    this.drawPieChart = function(e) {
        var t = this.ctx;
        t.lineWidth = this.pieBorderWidth;
        var n = 0, r = 0, i = this.data.length;
        for (var s = 0; s < i; s++) {
            r += this.data[s];
            if (this.data[s] < 0) return;
        }
        this.pieTotal == null ? n = r : n = this.pieTotal;
        var o = this.width - this.marginLeft - this.marginRight, u = this.height - this.marginTop - this.marginBottom;
        this.title && (u = u - this.titleFontHeight - this.titleMargin);
        var a = this.width / 2, f = this.marginTop + u / 2;
        this.title && (f += this.titleFontHeight + this.titleMargin);
        var l = 2 * Math.PI, c = Math.min(o, u) / 2;
        t.font = this.labelFontStyle + " " + this.labelFontHeight + "px " + this.labelFont;
        var h = 0, p = 0;
        for (var s = 0; s < this.labels.length; s++) {
            p = t.measureText(this.labels[s]).width;
            p > h && (h = p);
        }
        c = c - h - this.labelMargin;
        var d = this.pieStart * l / r, v = d, m = 0, g = 0;
        for (var s = 0; s < i; s++) {
            t.beginPath();
            g = this.data[s] * l / n;
            m = v + g;
            t.moveTo(a, f);
            t.arc(a, f, c, v, m, !1);
            t.lineTo(a, f);
            v = m;
            this.colors[s] ? t.fillStyle = this.colors[s] : t.fillStyle = this.pieFillStyle;
            t.fill();
            t.strokeStyle = this.pieStrokeStyle;
            t.stroke();
        }
        t.save();
        t.shadowOffsetX = this.pieShadowOffsetX;
        t.shadowOffsetY = this.pieShadowOffsetY;
        t.translate(a, f);
        t.beginPath();
        t.moveTo(0, 0);
        t.arc(0, 0, c, d, m, !1);
        t.shadowBlur = this.pieShadowBlur;
        t.shadowColor = this.pieShadowColor;
        t.globalCompositeOperation = "destination-over";
        t.fillStyle = "rgba(0,0,0,1.0)";
        t.fill();
        t.restore();
        if (e) {
            var y = c / 2;
            t.save();
            t.beginPath();
            t.moveTo(a + y, f);
            t.arc(a, f, y + this.pieBorderWidth, d, m, !1);
            t.fillStyle = this.pieStrokeStyle;
            t.fill();
            t.restore();
            t.save();
            t.beginPath();
            t.moveTo(a + y, f);
            t.arc(a, f, y, 0, l, !1);
            t.globalCompositeOperation = "destination-out";
            t.fillStyle = "#000";
            t.fill();
            t.restore();
            t.save();
            t.shadowOffsetX = this.pieShadowOffsetX;
            t.shadowOffsetY = this.pieShadowOffsetY;
            t.translate(a, f);
            t.beginPath();
            t.arc(0, 0, y, d, m, !1);
            t.shadowBlur = this.pieShadowBlur;
            t.shadowColor = this.pieShadowColor;
            t.globalCompositeOperation = "destination-over";
            t.strokeStyle = this.pieStrokeStyle;
            t.stroke();
            t.restore();
        }
        var v = this.pieStart * l / r, m = 0, g = 0;
        t.beginPath();
        for (var s = 0; s < this.data.length; s++) {
            t.save();
            g = this.data[s] * l / n;
            m = v + g;
            var b = v + g / 2;
            t.translate(a, f);
            t.rotate(b);
            t.font = this.labelFontStyle + " " + this.labelFontHeight + "px " + this.labelFont;
            this.colors[s] ? t.fillStyle = this.colors[s] : t.fillStyle = this.labelFillStyle;
            t.textAlign = "start";
            if (this.labels[s]) {
                if (b > Math.PI / 2 && b <= 3 * (Math.PI / 2)) {
                    var w = c + this.labelMargin + t.measureText(this.labels[s]).width / 2;
                    t.translate(w, 0);
                    t.rotate(Math.PI);
                    t.translate(-w, 0);
                }
                t.textBaseline = "middle";
                t.fillText(this.labels[s], c + this.labelMargin, 0);
            }
            t.restore();
            v = m;
        }
    };
    this.drawExplodedPieChart = function() {
        var e = this.ctx;
        e.lineWidth = this.pieBorderWidth;
        var t = 0, n = 0, r = this.data.length;
        for (var i = 0; i < r; i++) {
            n += this.data[i];
            if (this.data[i] < 0) return;
        }
        this.pieTotal == null ? t = n : t = this.pieTotal;
        var s = this.width - this.marginLeft - this.marginRight, o = this.height - this.marginTop - this.marginBottom;
        this.title != null && (o = o - this.titleFontHeight - this.titleMargin);
        var u = this.width / 2, a = this.marginTop + o / 2;
        this.title && (a += this.titleFontHeight + this.titleMargin);
        var f = 2 * Math.PI, l = Math.min(s, o) / 2;
        e.font = this.labelFontStyle + " " + this.labelFontHeight + "px " + this.labelFont;
        var c = 0, h = 0;
        for (var i = 0; i < this.labels.length; i++) {
            h = e.measureText(this.labels[i]).width;
            h > c && (c = h);
        }
        l = l - c - this.labelMargin;
        var p = this.pieStart * f / n, d = 0, v = 0, m = 0, g = 0;
        for (var i = 0; i < this.data.length; i++) {
            e.save();
            v = this.data[i] * f / t;
            d = p + v;
            m = v / 2;
            g = p + m;
            e.translate(u, a);
            e.rotate(p);
            e.rotate(m);
            e.translate(this.explosionOffset, 0);
            e.rotate(-m);
            e.beginPath();
            e.moveTo(0, 0);
            e.arc(0, 0, l, 0, v, !1);
            e.lineTo(0, 0);
            e.save();
            e.shadowOffsetX = this.pieShadowOffsetX;
            e.shadowOffsetY = this.pieShadowOffsetY;
            e.shadowBlur = this.pieShadowBlur;
            e.shadowColor = this.pieShadowColor;
            this.colors[i] ? e.fillStyle = this.colors[i] : e.fillStyle = this.pieFillStyle;
            e.fill();
            e.restore();
            e.strokeStyle = this.pieStrokeStyle;
            e.stroke();
            e.rotate(m);
            e.font = this.labelFontStyle + " " + this.labelFontHeight + "px " + this.labelFont;
            this.colors[i] ? e.fillStyle = this.colors[i] : e.fillStyle = this.labelFillStyle;
            e.textAlign = "start";
            if (this.labels[i]) {
                if (g > Math.PI / 2 && g <= 3 * (Math.PI / 2)) {
                    var y = l + this.labelMargin + e.measureText(this.labels[i]).width / 2;
                    e.translate(y, 0);
                    e.rotate(Math.PI);
                    e.translate(-y, 0);
                }
                e.textBaseline = "middle";
                e.fillText(this.labels[i], l + this.labelMargin, 0);
            }
            e.restore();
            p = d;
        }
    };
    this.animatePieChart = function(e) {
        var t = 0, n = this.pieTotal, r = this, i = this.animationFrames, s = 0, o = this.width - this.marginLeft - this.marginRight, u = this.height - this.marginTop - this.marginBottom, a = this.marginTop, f = this.marginLeft;
        if (this.title) {
            u = u - this.titleFontHeight - this.titleMargin;
            a += this.titleFontHeight + this.titleMargin;
        }
        for (var l = 0; l < this.data.length; l++) {
            t += this.data[l];
            if (this.data[l] < 0) return;
        }
        n == null && (n = t);
        var c = function() {
            if (s++ < i) {
                r.ctx.clearRect(0, 0, r.width, r.height);
                r.pieTotal = t * (i / s) * (n / t);
                e == "pie" ? r.drawPieChart(!1) : e == "ring" ? r.drawPieChart(!0) : e == "exploded" && r.drawExplodedPieChart();
                r.drawTitleAndBorders();
                typeof window.requestAnimationFrame == "function" ? window.requestAnimationFrame(c) : typeof window.msRequestAnimationFrame == "function" ? window.msRequestAnimationFrame(c) : typeof window.webkitRequestAnimationFrame == "function" ? window.webkitRequestAnimationFrame(c) : window.mozRequestAnimationFrame ? window.mozRequestAnimationFrame(c) : setTimeout(c, 16.6666666);
            }
        };
        c();
    };
    this.drawParetoChart = function() {
        var e = this.ctx, t = this.data.length, n = new Array;
        for (var r = 0; r < this.data.length; r++) n.push(r);
        n.numericSortReverse(this.data);
        var i = this.data[n[0]], s = this.data[n[n.length - 1]], o = 0;
        for (var r = 0; r < this.data.length; r++) {
            o += this.data[n[r]];
            if (this.data[n[r]] < 0) return;
        }
        o = o.toFixed(this.numberOfDecimals);
        var u = new Array;
        u.push(0);
        for (var r = 1; r < 10; r++) u.push((o * r / 10).toFixed(this.numberOfDecimals));
        u.push(o);
        e.font = this.yAxisLabelFontStyle + " " + this.yAxisLabelFontHeight + "px " + this.yAxisLabelFont;
        var a = 0, f = 0;
        for (var r = 0; r < u.length; r++) {
            f = e.measureText(u[r]).width;
            f > a && (a = f);
        }
        var l = e.measureText("100%").width, c = this.width - this.marginLeft - this.marginRight - 2 * this.chartMarkerSize - a - l - 2 * this.yAxisLabelMargin, h = this.height - this.marginTop - this.marginBottom, p = this.marginLeft + this.chartMarkerSize + a + this.yAxisLabelMargin, d = this.marginTop;
        if (this.title) {
            h -= this.titleFontHeight + this.titleMargin;
            d += this.titleFontHeight + this.titleMargin;
        }
        e.save();
        e.translate(p, d);
        e.fillStyle = this.chartBackgroundFillStyle;
        e.fillRect(0, 0, c, h);
        var v = h / 10, m = 0;
        e.lineWidth = this.chartHorizontalLineWidth;
        e.font = this.yAxisLabelFontStyle + " " + this.yAxisLabelFontHeight + "px " + this.yAxisLabelFont;
        for (var r = 0; r <= 10; r++) {
            m = r * v;
            if (r > 0 && r < 10) {
                e.strokeStyle = this.chartHorizontalLineStrokeStyle;
                e.beginPath();
                e.moveTo(0, m);
                e.lineTo(c, m);
                e.stroke();
            }
            e.strokeStyle = this.chartBorderStrokeStyle;
            e.beginPath();
            e.moveTo(-this.chartMarkerSize, m);
            e.lineTo(0, m);
            e.stroke();
            e.beginPath();
            e.moveTo(c, m);
            e.lineTo(c + this.chartMarkerSize, m);
            e.stroke();
            e.fillStyle = this.yAxisLabelFillStyle;
            e.textAlign = "right";
            e.textBaseline = "middle";
            e.fillText(u[10 - r], -this.chartMarkerSize - this.yAxisLabelMargin, m);
            e.textAlign = "left";
            e.fillText((10 - r) * 10 + "%", c + this.chartMarkerSize + this.yAxisLabelMargin, m);
        }
        e.save();
        e.translate(0, h);
        var g = (c - 2 * this.barHGap) / t, y = 0, b = g / 2, w = 0, E = this.barHGap, S = E, x = 0, T = 0, N = 0;
        for (var r = 0; r < this.data.length; r++) {
            y = this.data[n[r]] * h / o;
            this.colors[r] ? e.fillStyle = this.colors[r] : e.fillStyle = this.barFillStyle;
            e.strokeStyle = this.barStrokeStyle;
            e.lineWidth = this.barBorderWidth;
            e.beginPath();
            e.moveTo(E, w);
            e.lineTo(E, w - y);
            e.lineTo(E + g, w - y);
            e.lineTo(E + g, w);
            e.save();
            e.shadowOffsetX = this.barShadowOffsetX;
            e.shadowOffsetY = this.barShadowOffsetY;
            e.shadowBlur = this.barShadowBlur;
            e.shadowColor = this.barShadowColor;
            e.fill();
            e.restore();
            e.stroke();
            T = S;
            N = x;
            S = E + g;
            x -= y;
            r == this.data.length - 1 && (x = -h);
            e.strokeStyle = this.chartLineStrokeStyle;
            e.lineWidth = this.chartLineWidth;
            e.beginPath();
            e.moveTo(S, x);
            e.lineTo(T, N);
            e.stroke();
            e.font = this.labelFontStyle + " " + this.labelFontHeight + "px " + this.labelFont;
            this.colors[r] ? e.fillStyle = this.colors[r] : e.fillStyle = this.labelFillStyle;
            e.textAlign = "center";
            if (this.labels[n[r]]) if (this.data[n[r]] >= 0) {
                e.textBaseline = "bottom";
                e.fillText(this.labels[n[r]], E + b, -y - this.labelMargin, g);
            } else {
                e.textBaseline = "top";
                e.fillText(this.labels[n[r]], E + b, -y + this.labelMargin, g);
            }
            e.font = this.dataValueFontStyle + " " + this.dataValueFontHeight + "px " + this.dataValueFont;
            e.fillStyle = this.dataValueFillStyle;
            e.textAlign = "center";
            if (this.data[n[r]] >= 0) {
                e.textBaseline = "bottom";
                e.fillText(this.data[n[r]], E + b, -y - this.labelMargin - this.dataValueMargin, g);
            } else {
                e.textBaseline = "top";
                e.fillText(this.data[n[r]], E + b, -y + this.labelMargin + this.dataValueMargin, g);
            }
            E += g;
        }
        E = this.barHGap;
        S = E;
        x = 0;
        T = 0;
        N = 0;
        e.fillStyle = this.chartPointFillStyle;
        e.beginPath();
        e.arc(S, x, this.chartPointRadius, 0, 2 * Math.PI, !1);
        e.fill();
        for (var r = 0; r < this.data.length; r++) {
            y = this.data[n[r]] * h / o;
            T = S;
            N = x;
            S = E + g;
            x -= y;
            r == this.data.length - 1 && (x = -h);
            e.fillStyle = this.chartPointFillStyle;
            e.beginPath();
            e.arc(S, x, this.chartPointRadius, 0, 2 * Math.PI, !1);
            e.fill();
            E += g;
        }
        e.restore();
        e.lineWidth = this.chartBorderLineWidth;
        e.strokeStyle = this.chartBorderStrokeStyle;
        e.strokeRect(0, 0, c, h);
        e.restore();
    };
}

Array.prototype.numericSortReverse = function(e) {
    this.sort(function(t, n) {
        return e[n] - e[t];
    });
};

Array.prototype.max = function() {
    var e = this[0], t = this.length;
    for (var n = 1; n < t; n++) this[n] > e && (e = this[n]);
    return e;
};

Array.prototype.min = function() {
    var e = this[0], t = this.length;
    for (var n = 1; n < t; n++) this[n] < e && (e = this[n]);
    return e;
};