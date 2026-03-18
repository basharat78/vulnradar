@extends('layouts.app')

@section('title', 'Findings')
@section('subtitle', '/ All Vulnerabilities')

@section('topbar-actions')
<button class="btn btn-ghost"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>Export CSV</button>
@endsection

@section('content')
<div class="vuln-summary">
  
  <div class="vuln-sum-card crit">
    <div class="vuln-big-num" style="color:var(--red)">3</div>
    <div style="font-size:11px;color:var(--text3);text-transform:uppercase;letter-spacing:.8px;font-family:var(--font-mono);">Critical</div>
  </div>
  <div class="vuln-sum-card high">
    <div class="vuln-big-num" style="color:var(--orange)">3</div>
    <div style="font-size:11px;color:var(--text3);text-transform:uppercase;letter-spacing:.8px;font-family:var(--font-mono);">High</div>
  </div>
  <div class="vuln-sum-card med">
    <div class="vuln-big-num" style="color:var(--yellow)">2</div>
    <div style="font-size:11px;color:var(--text3);text-transform:uppercase;letter-spacing:.8px;font-family:var(--font-mono);">Medium</div>
  </div>
  <div class="vuln-sum-card low">
    <div class="vuln-big-num" style="color:var(--green)">1</div>
    <div style="font-size:11px;color:var(--text3);text-transform:uppercase;letter-spacing:.8px;font-family:var(--font-mono);">Low</div>
  </div>
</div>

<div class="findings-filters">
  <button class="f-btn active-all">All (9)</button>
  <button class="f-btn active-crit">Critical (3)</button>
  <button class="f-btn active-high">High (3)</button>
  <button class="f-btn active-med">Medium (2)</button>
  <button class="f-btn">Low (1)</button>
  <div style="margin-left:auto;display:flex;gap:8px;">
    <select class="form-input" style="padding:6px 12px;font-size:12px;width:auto;"><option>All Sites</option><option>Acme Corp</option><option>ShopFast</option></select>
    <select class="form-input" style="padding:6px 12px;font-size:12px;width:auto;"><option>All Categories</option><option>HTTP Headers</option><option>SSL/TLS</option><option>DNS</option></select>
  </div>
</div>


<div class="finding-card crit sev-crit" id="fc0">
  <div class="finding-card-header" onclick="toggleFC('fc0')">
    <div class="finding-sev-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg></div>
    <div style="flex:1;">
      <div style="font-weight:600;font-size:13.5px;color:var(--text);margin-bottom:3px;">.env File Publicly Accessible</div>
      <div style="font-size:12px;color:var(--text3);display:flex;align-items:center;gap:10px;">
        <span style="font-family:var(--font-mono);">acmecorp.com</span>
        <span class="tag tag-gray">sensitive-files</span>
        <span>2 min ago</span>
      </div>
    </div>
    <span class="risk-badge risk-critical" style="flex-shrink:0;">Critical</span>
    <svg style="width:16px;height:16px;color:var(--text3);transition:transform .2s;flex-shrink:0;" class="fc-caret" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
  </div>
  <div class="finding-card-body">
    <div class="detail-block"><div class="detail-lbl">Description</div><p style="font-size:13px;color:var(--text2);">Sensitive environment variables exposed to public internet</p></div>
    <div class="detail-block"><div class="detail-lbl">Recommended Fix</div><div class="code-block">Add to Nginx: location ~ /\. { deny all; }</div></div>
    <div style="display:flex;gap:8px;margin-top:12px;">
      <button class="btn btn-ghost btn-sm">Mark Resolved</button>
      <button class="btn btn-ghost btn-sm">Assign</button>
      <button class="btn btn-ghost btn-sm">False Positive</button>
    </div>
  </div>
</div>
<div class="finding-card crit sev-crit" id="fc1">
  <div class="finding-card-header" onclick="toggleFC('fc1')">
    <div class="finding-sev-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg></div>
    <div style="flex:1;">
      <div style="font-weight:600;font-size:13.5px;color:var(--text);margin-bottom:3px;">SSL Certificate Expiring in 3 Days</div>
      <div style="font-size:12px;color:var(--text3);display:flex;align-items:center;gap:10px;">
        <span style="font-family:var(--font-mono);">acmecorp.com</span>
        <span class="tag tag-gray">ssl-tls</span>
        <span>2 min ago</span>
      </div>
    </div>
    <span class="risk-badge risk-critical" style="flex-shrink:0;">Critical</span>
    <svg style="width:16px;height:16px;color:var(--text3);transition:transform .2s;flex-shrink:0;" class="fc-caret" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
  </div>
  <div class="finding-card-body">
    <div class="detail-block"><div class="detail-lbl">Description</div><p style="font-size:13px;color:var(--text2);">Site will show browser security warning after expiry</p></div>
    <div class="detail-block"><div class="detail-lbl">Recommended Fix</div><div class="code-block">Renew via Let's Encrypt: certbot renew</div></div>
    <div style="display:flex;gap:8px;margin-top:12px;">
      <button class="btn btn-ghost btn-sm">Mark Resolved</button>
      <button class="btn btn-ghost btn-sm">Assign</button>
      <button class="btn btn-ghost btn-sm">False Positive</button>
    </div>
  </div>
</div>
<div class="finding-card crit sev-crit" id="fc2">
  <div class="finding-card-header" onclick="toggleFC('fc2')">
    <div class="finding-sev-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/></svg></div>
    <div style="flex:1;">
      <div style="font-weight:600;font-size:13.5px;color:var(--text);margin-bottom:3px;">Database Error Messages Exposed</div>
      <div style="font-size:12px;color:var(--text3);display:flex;align-items:center;gap:10px;">
        <span style="font-family:var(--font-mono);">healthclinic.care</span>
        <span class="tag tag-gray">info-disclosure</span>
        <span>4 hrs ago</span>
      </div>
    </div>
    <span class="risk-badge risk-critical" style="flex-shrink:0;">Critical</span>
    <svg style="width:16px;height:16px;color:var(--text3);transition:transform .2s;flex-shrink:0;" class="fc-caret" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
  </div>
  <div class="finding-card-body">
    <div class="detail-block"><div class="detail-lbl">Description</div><p style="font-size:13px;color:var(--text2);">SQL error details leaked in HTTP responses</p></div>
    <div class="detail-block"><div class="detail-lbl">Recommended Fix</div><div class="code-block">Set APP_DEBUG=false in production .env</div></div>
    <div style="display:flex;gap:8px;margin-top:12px;">
      <button class="btn btn-ghost btn-sm">Mark Resolved</button>
      <button class="btn btn-ghost btn-sm">Assign</button>
      <button class="btn btn-ghost btn-sm">False Positive</button>
    </div>
  </div>
</div>
<div class="finding-card high sev-high" id="fc3">
  <div class="finding-card-header" onclick="toggleFC('fc3')">
    <div class="finding-sev-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="4 17 10 11 4 5"/><line x1="12" y1="19" x2="20" y2="19"/></svg></div>
    <div style="flex:1;">
      <div style="font-weight:600;font-size:13.5px;color:var(--text);margin-bottom:3px;">Missing Content-Security-Policy Header</div>
      <div style="font-size:12px;color:var(--text3);display:flex;align-items:center;gap:10px;">
        <span style="font-family:var(--font-mono);">shopfast.io</span>
        <span class="tag tag-gray">http-headers</span>
        <span>1 hr ago</span>
      </div>
    </div>
    <span class="risk-badge risk-high" style="flex-shrink:0;">High</span>
    <svg style="width:16px;height:16px;color:var(--text3);transition:transform .2s;flex-shrink:0;" class="fc-caret" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
  </div>
  <div class="finding-card-body">
    <div class="detail-block"><div class="detail-lbl">Description</div><p style="font-size:13px;color:var(--text2);">XSS attacks possible without CSP protection</p></div>
    <div class="detail-block"><div class="detail-lbl">Recommended Fix</div><div class="code-block">Add header: Content-Security-Policy: default-src 'self'</div></div>
    <div style="display:flex;gap:8px;margin-top:12px;">
      <button class="btn btn-ghost btn-sm">Mark Resolved</button>
      <button class="btn btn-ghost btn-sm">Assign</button>
      <button class="btn btn-ghost btn-sm">False Positive</button>
    </div>
  </div>
</div>
<div class="finding-card high sev-high" id="fc4">
  <div class="finding-card-header" onclick="toggleFC('fc4')">
    <div class="finding-sev-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10z"/></svg></div>
    <div style="flex:1;">
      <div style="font-weight:600;font-size:13.5px;color:var(--text);margin-bottom:3px;">DMARC DNS Record Missing</div>
      <div style="font-size:12px;color:var(--text3);display:flex;align-items:center;gap:10px;">
        <span style="font-family:var(--font-mono);">legalfirm.law</span>
        <span class="tag tag-gray">dns-records</span>
        <span>2 days ago</span>
      </div>
    </div>
    <span class="risk-badge risk-high" style="flex-shrink:0;">High</span>
    <svg style="width:16px;height:16px;color:var(--text3);transition:transform .2s;flex-shrink:0;" class="fc-caret" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
  </div>
  <div class="finding-card-body">
    <div class="detail-block"><div class="detail-lbl">Description</div><p style="font-size:13px;color:var(--text2);">Domain vulnerable to email spoofing attacks</p></div>
    <div class="detail-block"><div class="detail-lbl">Recommended Fix</div><div class="code-block">Add TXT record: _dmarc.domain.com → v=DMARC1; p=reject</div></div>
    <div style="display:flex;gap:8px;margin-top:12px;">
      <button class="btn btn-ghost btn-sm">Mark Resolved</button>
      <button class="btn btn-ghost btn-sm">Assign</button>
      <button class="btn btn-ghost btn-sm">False Positive</button>
    </div>
  </div>
</div>
<div class="finding-card high sev-high" id="fc5">
  <div class="finding-card-header" onclick="toggleFC('fc5')">
    <div class="finding-sev-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/></svg></div>
    <div style="flex:1;">
      <div style="font-weight:600;font-size:13.5px;color:var(--text);margin-bottom:3px;">Admin Login Page Publicly Exposed</div>
      <div style="font-size:12px;color:var(--text3);display:flex;align-items:center;gap:10px;">
        <span style="font-family:var(--font-mono);">financeapp.co</span>
        <span class="tag tag-gray">auth-exposure</span>
        <span>5 min ago</span>
      </div>
    </div>
    <span class="risk-badge risk-high" style="flex-shrink:0;">High</span>
    <svg style="width:16px;height:16px;color:var(--text3);transition:transform .2s;flex-shrink:0;" class="fc-caret" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
  </div>
  <div class="finding-card-body">
    <div class="detail-block"><div class="detail-lbl">Description</div><p style="font-size:13px;color:var(--text2);">WordPress /wp-admin accessible without IP restriction</p></div>
    <div class="detail-block"><div class="detail-lbl">Recommended Fix</div><div class="code-block">Restrict /wp-admin access by IP in Nginx config</div></div>
    <div style="display:flex;gap:8px;margin-top:12px;">
      <button class="btn btn-ghost btn-sm">Mark Resolved</button>
      <button class="btn btn-ghost btn-sm">Assign</button>
      <button class="btn btn-ghost btn-sm">False Positive</button>
    </div>
  </div>
</div>
<div class="finding-card med sev-med" id="fc6">
  <div class="finding-card-header" onclick="toggleFC('fc6')">
    <div class="finding-sev-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg></div>
    <div style="flex:1;">
      <div style="font-weight:600;font-size:13.5px;color:var(--text);margin-bottom:3px;">WordPress 6.2.1 — Outdated Version</div>
      <div style="font-size:12px;color:var(--text3);display:flex;align-items:center;gap:10px;">
        <span style="font-family:var(--font-mono);">acmecorp.com</span>
        <span class="tag tag-gray">cms-fingerprint</span>
        <span>2 min ago</span>
      </div>
    </div>
    <span class="risk-badge risk-medium" style="flex-shrink:0;">Medium</span>
    <svg style="width:16px;height:16px;color:var(--text3);transition:transform .2s;flex-shrink:0;" class="fc-caret" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
  </div>
  <div class="finding-card-body">
    <div class="detail-block"><div class="detail-lbl">Description</div><p style="font-size:13px;color:var(--text2);">3 known CVEs for this version</p></div>
    <div class="detail-block"><div class="detail-lbl">Recommended Fix</div><div class="code-block">Update WordPress via Dashboard → Updates</div></div>
    <div style="display:flex;gap:8px;margin-top:12px;">
      <button class="btn btn-ghost btn-sm">Mark Resolved</button>
      <button class="btn btn-ghost btn-sm">Assign</button>
      <button class="btn btn-ghost btn-sm">False Positive</button>
    </div>
  </div>
</div>
<div class="finding-card med sev-med" id="fc7">
  <div class="finding-card-header" onclick="toggleFC('fc7')">
    <div class="finding-sev-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="1" y="4" width="22" height="16" rx="2"/><line x1="1" y1="10" x2="23" y2="10"/></svg></div>
    <div style="flex:1;">
      <div style="font-weight:600;font-size:13.5px;color:var(--text);margin-bottom:3px;">Missing X-Frame-Options Header</div>
      <div style="font-size:12px;color:var(--text3);display:flex;align-items:center;gap:10px;">
        <span style="font-family:var(--font-mono);">shopfast.io</span>
        <span class="tag tag-gray">http-headers</span>
        <span>1 hr ago</span>
      </div>
    </div>
    <span class="risk-badge risk-medium" style="flex-shrink:0;">Medium</span>
    <svg style="width:16px;height:16px;color:var(--text3);transition:transform .2s;flex-shrink:0;" class="fc-caret" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
  </div>
  <div class="finding-card-body">
    <div class="detail-block"><div class="detail-lbl">Description</div><p style="font-size:13px;color:var(--text2);">Site vulnerable to clickjacking attacks</p></div>
    <div class="detail-block"><div class="detail-lbl">Recommended Fix</div><div class="code-block">Add header: X-Frame-Options: SAMEORIGIN</div></div>
    <div style="display:flex;gap:8px;margin-top:12px;">
      <button class="btn btn-ghost btn-sm">Mark Resolved</button>
      <button class="btn btn-ghost btn-sm">Assign</button>
      <button class="btn btn-ghost btn-sm">False Positive</button>
    </div>
  </div>
</div>
<div class="finding-card low sev-low" id="fc8">
  <div class="finding-card-header" onclick="toggleFC('fc8')">
    <div class="finding-sev-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg></div>
    <div style="flex:1;">
      <div style="font-weight:600;font-size:13.5px;color:var(--text);margin-bottom:3px;">HSTS Header Not Set</div>
      <div style="font-size:12px;color:var(--text3);display:flex;align-items:center;gap:10px;">
        <span style="font-family:var(--font-mono);">newsblog.co</span>
        <span class="tag tag-gray">ssl-tls</span>
        <span>Yesterday</span>
      </div>
    </div>
    <span class="risk-badge risk-low" style="flex-shrink:0;">Low</span>
    <svg style="width:16px;height:16px;color:var(--text3);transition:transform .2s;flex-shrink:0;" class="fc-caret" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
  </div>
  <div class="finding-card-body">
    <div class="detail-block"><div class="detail-lbl">Description</div><p style="font-size:13px;color:var(--text2);">HTTP Strict Transport Security not enforced</p></div>
    <div class="detail-block"><div class="detail-lbl">Recommended Fix</div><div class="code-block">Add header: Strict-Transport-Security: max-age=31536000</div></div>
    <div style="display:flex;gap:8px;margin-top:12px;">
      <button class="btn btn-ghost btn-sm">Mark Resolved</button>
      <button class="btn btn-ghost btn-sm">Assign</button>
      <button class="btn btn-ghost btn-sm">False Positive</button>
    </div>
  </div>
</div>

<script>
function toggleFC(id){
  const el=document.getElementById(id);
  el.classList.toggle('open');
  el.querySelector('.fc-caret').style.transform=el.classList.contains('open')?'rotate(180deg)':'';
}
</script>
@endsection
