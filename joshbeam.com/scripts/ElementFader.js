/*
 * Copyright (C) 2008 Josh A. Beam <josh@joshbeam.com>
 *
 * Permission to use, copy, modify, and/or distribute this software for any
 * purpose with or without fee is hereby granted, provided that the above
 * copyright notice and this permission notice appear in all copies.
 *
 * THE SOFTWARE IS PROVIDED "AS IS" AND THE AUTHOR DISCLAIMS ALL WARRANTIES
 * WITH REGARD TO THIS SOFTWARE INCLUDING ALL IMPLIED WARRANTIES OF
 * MERCHANTABILITY AND FITNESS. IN NO EVENT SHALL THE AUTHOR BE LIABLE FOR
 * ANY SPECIAL, DIRECT, INDIRECT, OR CONSEQUENTIAL DAMAGES OR ANY DAMAGES
 * WHATSOEVER RESULTING FROM LOSS OF USE, DATA OR PROFITS, WHETHER IN AN
 * ACTION OF CONTRACT, NEGLIGENCE OR OTHER TORTIOUS ACTION, ARISING OUT OF
 * OR IN CONNECTION WITH THE USE OR PERFORMANCE OF THIS SOFTWARE.
 */

// Creates an object that can be used to fade the given
// element. element can be the element object itself or
// a string containing the element's ID.
function ElementFader(element)
{
	var m_Element = (typeof element == "string") ? document.getElementById(element) : element;

	var m_CurrentOpacity = 0.0;
	var m_TargetOpacity = 0.0;
	var m_StopThreshold = 0.01;
	var m_FadeFactor = 0.5;
	var m_FadeInterval = 40;
	var m_Interval = null;

	// Get/set the stop threshold. When the opacity reaches
	// the target opacity +/- this value, the opacity is set
	// to the target opacity and the fading stops.
	this.SetStopThreshold = function(value) { m_StopThreshold = value; }
	this.GetStopThreshold = function() { return m_StopThreshold; }

	// Get/set the fade factor. This is the factor used to
	// linearly interpolate from the current opacity to the
	// target opacity when fading.
	this.SetFadeFactor = function(value) { m_FadeFactor = value; }
	this.GetFadeFactor = function() { return m_FadeFactor; }

	// Get/set the fade interval. This is the number of
	// milliseconds to wait between calls to the DoFade function.
	this.SetFadeInterval = function(value) { m_FadeInterval = value; }
	this.GetFadeInterval = function() { return m_FadeInterval; }

	// Sets the current opacity of the element.
	function SetOpacity(opacity)
	{
		m_CurrentOpacity = opacity;
		m_Element.style.opacity = opacity;
		m_Element.style.filter = "alpha(opacity = " + (opacity * 100) + ")"; // for IE
		m_Element.style.visibility = (opacity == 0) ? "hidden" : "visible";
	}

	function DoFade()
	{
		// linearly interpolate from current opacity to target opacity
		var opacity = m_CurrentOpacity + (m_TargetOpacity - m_CurrentOpacity) * m_FadeFactor;
		SetOpacity(opacity);

		// stop fading if close enough to the target opacity
		if(opacity > m_TargetOpacity - m_StopThreshold && opacity < m_TargetOpacity + m_StopThreshold) {
			SetOpacity(m_TargetOpacity);
			if(m_Interval != null)
				clearInterval(m_Interval);
		}
	}

	// Starts fading the element from start_opacity to
	// end_opacity, with both values being between 0 and 1.
	this.Fade = function(start_opacity, end_opacity)
	{
		// clear previous interval if necessary
		if(m_Interval != null) {
			clearInterval(m_Interval);
			m_Interval = null;
		}

		m_TargetOpacity = end_opacity;
		SetOpacity(start_opacity);

		// start interval
		m_Interval = setInterval(DoFade, m_FadeInterval);
	}

	// Starts fading the element in (current opacity to 1).
	this.FadeIn = function()
	{
		this.Fade(m_CurrentOpacity, 1);
	}

	// Starts fading the element out (current opacity to 0).
	this.FadeOut = function()
	{
		this.Fade(m_CurrentOpacity, 0);
	}

	// Starts fading the element in if the target opacity
	// is currently 0; starts fading the element out otherwise.
	// If fading in, the target opacity will be set to the
	// value given.
	this.Toggle = function(target_opacity)
	{
		if(m_TargetOpacity == 0) {
			if(target_opacity == null)
				this.FadeIn();
			else
				this.Fade(m_CurrentOpacity, target_opacity);
		} else
			this.FadeOut();
	}
}
