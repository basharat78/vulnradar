@extends('layouts.app')

@section('title', 'Sites')
@section('subtitle', '/ All Monitored Sites')

@section('topbar-actions')
<button class="btn btn-primary" onclick="document.getElementById('addSiteModal')&&(document.getElementById('addSiteModal').style.display='flex')"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg>Add Site</button>
@endsection

@section('content')
<div class="filter-bar">
  <button class="filter-btn active">All Sites (12)</button>
  <button class="filter-btn">Critical (2)</button>
  <button class="filter-btn">High (3)</button>
  <button class="filter-btn">Medium (2)</button>
  <button class="filter-btn">Low (2)</button>
  <button class="filter-btn">Scanning (2)</button>
  <button class="filter-btn">Failed (1)</button>
</div>
<div class="sites-grid"><div class="site-card crit">
  <div class="site-card-top">
    <div style="display:flex;align-items:center;gap:12px;">
      <div class="site-fav">🌐</div>
      <div><div class="site-card-name">Acme Corp</div><div class="site-card-url">acmecorp.com</div></div>
    </div>
    <span class="risk-badge risk-critical">Critical</span>
  </div>
  <div class="site-card-stats">
    <div class="stat-mini"><div class="stat-mini-val" style="color:var(--red)">88</div><div class="stat-mini-lbl">Risk Score</div></div>
    <div class="stat-mini"><div class="stat-mini-val" style="color:var(--orange)">8</div><div class="stat-mini-lbl">Findings</div></div>
  </div>
  <div class="site-card-footer">
    <span class="scan-status" style="color:var(--cyan)"><span class="pulse"></span> Scanning</span>
    <span style="font-size:11px;color:var(--text3);font-family:var(--font-mono);">2 min ago</span>
  </div>
</div>
<div class="site-card high">
  <div class="site-card-top">
    <div style="display:flex;align-items:center;gap:12px;">
      <div class="site-fav">🛒</div>
      <div><div class="site-card-name">ShopFast</div><div class="site-card-url">shopfast.io</div></div>
    </div>
    <span class="risk-badge risk-high">High</span>
  </div>
  <div class="site-card-stats">
    <div class="stat-mini"><div class="stat-mini-val" style="color:var(--orange)">65</div><div class="stat-mini-lbl">Risk Score</div></div>
    <div class="stat-mini"><div class="stat-mini-val" style="color:var(--orange)">5</div><div class="stat-mini-lbl">Findings</div></div>
  </div>
  <div class="site-card-footer">
    <span class="scan-status" style="color:var(--green)"><span class="dot" style="background:var(--green)"></span> Complete</span>
    <span style="font-size:11px;color:var(--text3);font-family:var(--font-mono);">1 hr ago</span>
  </div>
</div>
<div class="site-card med">
  <div class="site-card-top">
    <div style="display:flex;align-items:center;gap:12px;">
      <div class="site-fav">🏢</div>
      <div><div class="site-card-name">TechStartup</div><div class="site-card-url">techstartup.dev</div></div>
    </div>
    <span class="risk-badge risk-medium">Medium</span>
  </div>
  <div class="site-card-stats">
    <div class="stat-mini"><div class="stat-mini-val" style="color:var(--yellow)">42</div><div class="stat-mini-lbl">Risk Score</div></div>
    <div class="stat-mini"><div class="stat-mini-val" style="color:var(--orange)">3</div><div class="stat-mini-lbl">Findings</div></div>
  </div>
  <div class="site-card-footer">
    <span class="scan-status" style="color:var(--green)"><span class="dot" style="background:var(--green)"></span> Complete</span>
    <span style="font-size:11px;color:var(--text3);font-family:var(--font-mono);">3 hrs ago</span>
  </div>
</div>
<div class="site-card low">
  <div class="site-card-top">
    <div style="display:flex;align-items:center;gap:12px;">
      <div class="site-fav">📰</div>
      <div><div class="site-card-name">NewsBlog</div><div class="site-card-url">newsblog.co</div></div>
    </div>
    <span class="risk-badge risk-low">Low</span>
  </div>
  <div class="site-card-stats">
    <div class="stat-mini"><div class="stat-mini-val" style="color:var(--green)">18</div><div class="stat-mini-lbl">Risk Score</div></div>
    <div class="stat-mini"><div class="stat-mini-val" style="color:var(--orange)">1</div><div class="stat-mini-lbl">Findings</div></div>
  </div>
  <div class="site-card-footer">
    <span class="scan-status" style="color:var(--green)"><span class="dot" style="background:var(--green)"></span> Complete</span>
    <span style="font-size:11px;color:var(--text3);font-family:var(--font-mono);">Yesterday</span>
  </div>
</div>
<div class="site-card high">
  <div class="site-card-top">
    <div style="display:flex;align-items:center;gap:12px;">
      <div class="site-fav">💼</div>
      <div><div class="site-card-name">LegalFirm</div><div class="site-card-url">legalfirm.law</div></div>
    </div>
    <span class="risk-badge risk-high">High</span>
  </div>
  <div class="site-card-stats">
    <div class="stat-mini"><div class="stat-mini-val" style="color:var(--orange)">71</div><div class="stat-mini-lbl">Risk Score</div></div>
    <div class="stat-mini"><div class="stat-mini-val" style="color:var(--orange)">6</div><div class="stat-mini-lbl">Findings</div></div>
  </div>
  <div class="site-card-footer">
    <span class="scan-status" style="color:var(--red)"><span class="dot" style="background:var(--red)"></span> Failed</span>
    <span style="font-size:11px;color:var(--text3);font-family:var(--font-mono);">2 days ago</span>
  </div>
</div>
<div class="site-card crit">
  <div class="site-card-top">
    <div style="display:flex;align-items:center;gap:12px;">
      <div class="site-fav">🏥</div>
      <div><div class="site-card-name">HealthClinic</div><div class="site-card-url">healthclinic.care</div></div>
    </div>
    <span class="risk-badge risk-critical">Critical</span>
  </div>
  <div class="site-card-stats">
    <div class="stat-mini"><div class="stat-mini-val" style="color:var(--red)">91</div><div class="stat-mini-lbl">Risk Score</div></div>
    <div class="stat-mini"><div class="stat-mini-val" style="color:var(--orange)">9</div><div class="stat-mini-lbl">Findings</div></div>
  </div>
  <div class="site-card-footer">
    <span class="scan-status" style="color:var(--green)"><span class="dot" style="background:var(--green)"></span> Complete</span>
    <span style="font-size:11px;color:var(--text3);font-family:var(--font-mono);">4 hrs ago</span>
  </div>
</div>
<div class="site-card med">
  <div class="site-card-top">
    <div style="display:flex;align-items:center;gap:12px;">
      <div class="site-fav">🎓</div>
      <div><div class="site-card-name">EduPortal</div><div class="site-card-url">eduportal.io</div></div>
    </div>
    <span class="risk-badge risk-medium">Medium</span>
  </div>
  <div class="site-card-stats">
    <div class="stat-mini"><div class="stat-mini-val" style="color:var(--yellow)">38</div><div class="stat-mini-lbl">Risk Score</div></div>
    <div class="stat-mini"><div class="stat-mini-val" style="color:var(--orange)">2</div><div class="stat-mini-lbl">Findings</div></div>
  </div>
  <div class="site-card-footer">
    <span class="scan-status" style="color:var(--green)"><span class="dot" style="background:var(--green)"></span> Complete</span>
    <span style="font-size:11px;color:var(--text3);font-family:var(--font-mono);">2 days ago</span>
  </div>
</div>
<div class="site-card high">
  <div class="site-card-top">
    <div style="display:flex;align-items:center;gap:12px;">
      <div class="site-fav">🏦</div>
      <div><div class="site-card-name">FinanceApp</div><div class="site-card-url">financeapp.co</div></div>
    </div>
    <span class="risk-badge risk-high">High</span>
  </div>
  <div class="site-card-stats">
    <div class="stat-mini"><div class="stat-mini-val" style="color:var(--orange)">74</div><div class="stat-mini-lbl">Risk Score</div></div>
    <div class="stat-mini"><div class="stat-mini-val" style="color:var(--orange)">7</div><div class="stat-mini-lbl">Findings</div></div>
  </div>
  <div class="site-card-footer">
    <span class="scan-status" style="color:var(--cyan)"><span class="pulse"></span> Scanning</span>
    <span style="font-size:11px;color:var(--text3);font-family:var(--font-mono);">5 min ago</span>
  </div>
</div>
<div class="site-card low">
  <div class="site-card-top">
    <div style="display:flex;align-items:center;gap:12px;">
      <div class="site-fav">🎮</div>
      <div><div class="site-card-name">GameSite</div><div class="site-card-url">gamesiteX.com</div></div>
    </div>
    <span class="risk-badge risk-low">Low</span>
  </div>
  <div class="site-card-stats">
    <div class="stat-mini"><div class="stat-mini-val" style="color:var(--green)">22</div><div class="stat-mini-lbl">Risk Score</div></div>
    <div class="stat-mini"><div class="stat-mini-val" style="color:var(--orange)">1</div><div class="stat-mini-lbl">Findings</div></div>
  </div>
  <div class="site-card-footer">
    <span class="scan-status" style="color:var(--green)"><span class="dot" style="background:var(--green)"></span> Complete</span>
    <span style="font-size:11px;color:var(--text3);font-family:var(--font-mono);">3 days ago</span>
  </div>
</div></div>

<!-- Sites Table View -->
<div class="panel">
  <div class="panel-header">
    <div class="panel-title">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
      All Sites
    </div>
    <div class="panel-actions">
      <span style="font-size:12px;color:var(--text3)">12 sites · 3 scanning credits remaining</span>
      <button class="btn btn-ghost btn-sm">Scan All</button>
    </div>
  </div>
  <table class="data-table">
    <thead><tr><th>Site</th><th>Risk</th><th>Score</th><th>Findings</th><th>Last Scan</th><th>Schedule</th><th></th></tr></thead>
    <tbody>
      <tr>
        <td><div style="display:flex;align-items:center;gap:12px;"><div style="width:32px;height:32px;background:var(--bg3);border:1px solid var(--border);border-radius:8px;display:flex;align-items:center;justify-content:center;font-size:15px;">🌐</div><div><div style="font-weight:600;font-size:13px;">Acme Corp</div><div style="font-size:11px;color:var(--text3);font-family:var(--font-mono);">acmecorp.com</div></div></div></td>
        <td><span class="risk-badge risk-critical">Critical</span></td>
        <td><div class="score-bar-wrap"><div class="score-bar"><div class="score-bar-fill" style="width:88%;background:var(--red)"></div></div><span class="score-num">88</span></div></td>
        <td><span style="font-family:var(--font-mono);font-size:13px;color:var(--orange);">8</span></td>
        <td><span style="font-size:12px;color:var(--text3);font-family:var(--font-mono);">2 min ago</span></td>
        <td><span class="tag tag-gray">Daily</span></td>
        <td><div style="display:flex;gap:6px;opacity:0;transition:.15s;" class="row-acts"><button class="mini-btn">View</button><button class="mini-btn">Scan</button><button class="mini-btn" style="color:var(--red);">Remove</button></div></td>
      </tr><tr>
        <td><div style="display:flex;align-items:center;gap:12px;"><div style="width:32px;height:32px;background:var(--bg3);border:1px solid var(--border);border-radius:8px;display:flex;align-items:center;justify-content:center;font-size:15px;">🛒</div><div><div style="font-weight:600;font-size:13px;">ShopFast</div><div style="font-size:11px;color:var(--text3);font-family:var(--font-mono);">shopfast.io</div></div></div></td>
        <td><span class="risk-badge risk-high">High</span></td>
        <td><div class="score-bar-wrap"><div class="score-bar"><div class="score-bar-fill" style="width:65%;background:var(--orange)"></div></div><span class="score-num">65</span></div></td>
        <td><span style="font-family:var(--font-mono);font-size:13px;color:var(--orange);">5</span></td>
        <td><span style="font-size:12px;color:var(--text3);font-family:var(--font-mono);">1 hr ago</span></td>
        <td><span class="tag tag-gray">Every 12h</span></td>
        <td><div style="display:flex;gap:6px;opacity:0;transition:.15s;" class="row-acts"><button class="mini-btn">View</button><button class="mini-btn">Scan</button><button class="mini-btn" style="color:var(--red);">Remove</button></div></td>
      </tr><tr>
        <td><div style="display:flex;align-items:center;gap:12px;"><div style="width:32px;height:32px;background:var(--bg3);border:1px solid var(--border);border-radius:8px;display:flex;align-items:center;justify-content:center;font-size:15px;">🏢</div><div><div style="font-weight:600;font-size:13px;">TechStartup</div><div style="font-size:11px;color:var(--text3);font-family:var(--font-mono);">techstartup.dev</div></div></div></td>
        <td><span class="risk-badge risk-medium">Medium</span></td>
        <td><div class="score-bar-wrap"><div class="score-bar"><div class="score-bar-fill" style="width:42%;background:var(--yellow)"></div></div><span class="score-num">42</span></div></td>
        <td><span style="font-family:var(--font-mono);font-size:13px;color:var(--orange);">3</span></td>
        <td><span style="font-size:12px;color:var(--text3);font-family:var(--font-mono);">3 hrs ago</span></td>
        <td><span class="tag tag-gray">Daily</span></td>
        <td><div style="display:flex;gap:6px;opacity:0;transition:.15s;" class="row-acts"><button class="mini-btn">View</button><button class="mini-btn">Scan</button><button class="mini-btn" style="color:var(--red);">Remove</button></div></td>
      </tr><tr>
        <td><div style="display:flex;align-items:center;gap:12px;"><div style="width:32px;height:32px;background:var(--bg3);border:1px solid var(--border);border-radius:8px;display:flex;align-items:center;justify-content:center;font-size:15px;">📰</div><div><div style="font-weight:600;font-size:13px;">NewsBlog</div><div style="font-size:11px;color:var(--text3);font-family:var(--font-mono);">newsblog.co</div></div></div></td>
        <td><span class="risk-badge risk-low">Low</span></td>
        <td><div class="score-bar-wrap"><div class="score-bar"><div class="score-bar-fill" style="width:18%;background:var(--green)"></div></div><span class="score-num">18</span></div></td>
        <td><span style="font-family:var(--font-mono);font-size:13px;color:var(--orange);">1</span></td>
        <td><span style="font-size:12px;color:var(--text3);font-family:var(--font-mono);">Yesterday</span></td>
        <td><span class="tag tag-gray">Weekly</span></td>
        <td><div style="display:flex;gap:6px;opacity:0;transition:.15s;" class="row-acts"><button class="mini-btn">View</button><button class="mini-btn">Scan</button><button class="mini-btn" style="color:var(--red);">Remove</button></div></td>
      </tr><tr>
        <td><div style="display:flex;align-items:center;gap:12px;"><div style="width:32px;height:32px;background:var(--bg3);border:1px solid var(--border);border-radius:8px;display:flex;align-items:center;justify-content:center;font-size:15px;">💼</div><div><div style="font-weight:600;font-size:13px;">LegalFirm</div><div style="font-size:11px;color:var(--text3);font-family:var(--font-mono);">legalfirm.law</div></div></div></td>
        <td><span class="risk-badge risk-high">High</span></td>
        <td><div class="score-bar-wrap"><div class="score-bar"><div class="score-bar-fill" style="width:71%;background:var(--orange)"></div></div><span class="score-num">71</span></div></td>
        <td><span style="font-family:var(--font-mono);font-size:13px;color:var(--orange);">6</span></td>
        <td><span style="font-size:12px;color:var(--text3);font-family:var(--font-mono);">2 days ago</span></td>
        <td><span class="tag tag-gray">Daily</span></td>
        <td><div style="display:flex;gap:6px;opacity:0;transition:.15s;" class="row-acts"><button class="mini-btn">View</button><button class="mini-btn">Scan</button><button class="mini-btn" style="color:var(--red);">Remove</button></div></td>
      </tr><tr>
        <td><div style="display:flex;align-items:center;gap:12px;"><div style="width:32px;height:32px;background:var(--bg3);border:1px solid var(--border);border-radius:8px;display:flex;align-items:center;justify-content:center;font-size:15px;">🏥</div><div><div style="font-weight:600;font-size:13px;">HealthClinic</div><div style="font-size:11px;color:var(--text3);font-family:var(--font-mono);">healthclinic.care</div></div></div></td>
        <td><span class="risk-badge risk-critical">Critical</span></td>
        <td><div class="score-bar-wrap"><div class="score-bar"><div class="score-bar-fill" style="width:91%;background:var(--red)"></div></div><span class="score-num">91</span></div></td>
        <td><span style="font-family:var(--font-mono);font-size:13px;color:var(--orange);">9</span></td>
        <td><span style="font-size:12px;color:var(--text3);font-family:var(--font-mono);">4 hrs ago</span></td>
        <td><span class="tag tag-gray">Daily</span></td>
        <td><div style="display:flex;gap:6px;opacity:0;transition:.15s;" class="row-acts"><button class="mini-btn">View</button><button class="mini-btn">Scan</button><button class="mini-btn" style="color:var(--red);">Remove</button></div></td>
      </tr>
    </tbody>
  </table>
</div>
<style>.data-table tbody tr:hover .row-acts{opacity:1!important;}</style>
@endsection
