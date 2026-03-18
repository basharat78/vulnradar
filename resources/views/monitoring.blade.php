@extends('layouts.app')

@section('title', 'Monitoring')
@section('subtitle', '/ Uptime & Status')

@section('topbar-actions')
<button class="btn btn-ghost btn-sm">Check All Now</button>
@endsection

@section('content')
<div style="display:grid;grid-template-columns:repeat(4,1fr);gap:16px;margin-bottom:24px;">
  <div style="background:var(--surface);border:1px solid var(--border);border-radius:var(--radius-lg);padding:20px;">
    <div style="font-size:11px;color:var(--text3);text-transform:uppercase;letter-spacing:.8px;font-family:var(--font-mono);margin-bottom:10px;">Sites Online</div>
    <div style="font-size:32px;font-weight:800;font-family:var(--font-display);color:var(--green);line-height:1;">11/12</div>
  </div><div style="background:var(--surface);border:1px solid var(--border);border-radius:var(--radius-lg);padding:20px;">
    <div style="font-size:11px;color:var(--text3);text-transform:uppercase;letter-spacing:.8px;font-family:var(--font-mono);margin-bottom:10px;">Avg Response</div>
    <div style="font-size:32px;font-weight:800;font-family:var(--font-display);color:var(--cyan);line-height:1;">312ms</div>
  </div><div style="background:var(--surface);border:1px solid var(--border);border-radius:var(--radius-lg);padding:20px;">
    <div style="font-size:11px;color:var(--text3);text-transform:uppercase;letter-spacing:.8px;font-family:var(--font-mono);margin-bottom:10px;">Avg Uptime</div>
    <div style="font-size:32px;font-weight:800;font-family:var(--font-display);color:var(--green);line-height:1;">98.2%</div>
  </div><div style="background:var(--surface);border:1px solid var(--border);border-radius:var(--radius-lg);padding:20px;">
    <div style="font-size:11px;color:var(--text3);text-transform:uppercase;letter-spacing:.8px;font-family:var(--font-mono);margin-bottom:10px;">Active Incidents</div>
    <div style="font-size:32px;font-weight:800;font-family:var(--font-display);color:var(--red);line-height:1;">1</div>
  </div>
</div>


<div class="monitor-card">
  <div class="monitor-header">
    <div class="monitor-site">
      <div class="monitor-fav">🌐</div>
      <div><div class="monitor-name">Acme Corp</div><div class="monitor-url">acmecorp.com</div></div>
    </div>
    <div class="monitor-stats">
      <div class="m-stat"><div class="m-stat-val" style="color:var(--green);">99.8%</div><div class="m-stat-lbl">Uptime</div></div>
      <div class="m-stat"><div class="m-stat-val">234ms</div><div class="m-stat-lbl">Response</div></div>
      <div class="m-stat"><div class="m-stat-val" style="color:var(--green);">0</div><div class="m-stat-lbl">Incidents</div></div>
    </div>
    <span class="online-badge online">
      <span class="pulse"></span>
      Online
    </span>
  </div>
  <div style="font-size:11px;color:var(--text3);font-family:var(--font-mono);margin-bottom:4px;">Last 60 checks</div>
  <div class="uptime-bar"><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg down" title="Offline"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg down" title="Offline"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div></div>
  <div style="display:flex;justify-content:space-between;font-size:11px;color:var(--text3);font-family:var(--font-mono);">
    <span>60 days ago</span><span>Today</span>
  </div>
</div>
<div class="monitor-card">
  <div class="monitor-header">
    <div class="monitor-site">
      <div class="monitor-fav">🛒</div>
      <div><div class="monitor-name">ShopFast</div><div class="monitor-url">shopfast.io</div></div>
    </div>
    <div class="monitor-stats">
      <div class="m-stat"><div class="m-stat-val" style="color:var(--green);">99.5%</div><div class="m-stat-lbl">Uptime</div></div>
      <div class="m-stat"><div class="m-stat-val">412ms</div><div class="m-stat-lbl">Response</div></div>
      <div class="m-stat"><div class="m-stat-val" style="color:var(--red);">1</div><div class="m-stat-lbl">Incidents</div></div>
    </div>
    <span class="online-badge online">
      <span class="pulse"></span>
      Online
    </span>
  </div>
  <div style="font-size:11px;color:var(--text3);font-family:var(--font-mono);margin-bottom:4px;">Last 60 checks</div>
  <div class="uptime-bar"><div class="uptime-seg up" title="Online"></div><div class="uptime-seg down" title="Offline"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg down" title="Offline"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg down" title="Offline"></div><div class="uptime-seg down" title="Offline"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg down" title="Offline"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg warn" title="Degraded"></div><div class="uptime-seg warn" title="Degraded"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg down" title="Offline"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div></div>
  <div style="display:flex;justify-content:space-between;font-size:11px;color:var(--text3);font-family:var(--font-mono);">
    <span>60 days ago</span><span>Today</span>
  </div>
</div>
<div class="monitor-card">
  <div class="monitor-header">
    <div class="monitor-site">
      <div class="monitor-fav">🏢</div>
      <div><div class="monitor-name">TechStartup</div><div class="monitor-url">techstartup.dev</div></div>
    </div>
    <div class="monitor-stats">
      <div class="m-stat"><div class="m-stat-val" style="color:var(--green);">99.9%</div><div class="m-stat-lbl">Uptime</div></div>
      <div class="m-stat"><div class="m-stat-val">178ms</div><div class="m-stat-lbl">Response</div></div>
      <div class="m-stat"><div class="m-stat-val" style="color:var(--green);">0</div><div class="m-stat-lbl">Incidents</div></div>
    </div>
    <span class="online-badge online">
      <span class="pulse"></span>
      Online
    </span>
  </div>
  <div style="font-size:11px;color:var(--text3);font-family:var(--font-mono);margin-bottom:4px;">Last 60 checks</div>
  <div class="uptime-bar"><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg down" title="Offline"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div></div>
  <div style="display:flex;justify-content:space-between;font-size:11px;color:var(--text3);font-family:var(--font-mono);">
    <span>60 days ago</span><span>Today</span>
  </div>
</div>
<div class="monitor-card">
  <div class="monitor-header">
    <div class="monitor-site">
      <div class="monitor-fav">💼</div>
      <div><div class="monitor-name">LegalFirm</div><div class="monitor-url">legalfirm.law</div></div>
    </div>
    <div class="monitor-stats">
      <div class="m-stat"><div class="m-stat-val" style="color:var(--yellow);">94.2%</div><div class="m-stat-lbl">Uptime</div></div>
      <div class="m-stat"><div class="m-stat-val">1.2s</div><div class="m-stat-lbl">Response</div></div>
      <div class="m-stat"><div class="m-stat-val" style="color:var(--red);">3</div><div class="m-stat-lbl">Incidents</div></div>
    </div>
    <span class="online-badge degraded">
      <span class="dot" style="background:var(--yellow)"></span>
      Degraded
    </span>
  </div>
  <div style="font-size:11px;color:var(--text3);font-family:var(--font-mono);margin-bottom:4px;">Last 60 checks</div>
  <div class="uptime-bar"><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg warn" title="Degraded"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg down" title="Offline"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg down" title="Offline"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg down" title="Offline"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg down" title="Offline"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg down" title="Offline"></div><div class="uptime-seg down" title="Offline"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg warn" title="Degraded"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div></div>
  <div style="display:flex;justify-content:space-between;font-size:11px;color:var(--text3);font-family:var(--font-mono);">
    <span>60 days ago</span><span>Today</span>
  </div>
</div>
<div class="monitor-card">
  <div class="monitor-header">
    <div class="monitor-site">
      <div class="monitor-fav">🏥</div>
      <div><div class="monitor-name">HealthClinic</div><div class="monitor-url">healthclinic.care</div></div>
    </div>
    <div class="monitor-stats">
      <div class="m-stat"><div class="m-stat-val" style="color:var(--green);">100%</div><div class="m-stat-lbl">Uptime</div></div>
      <div class="m-stat"><div class="m-stat-val">156ms</div><div class="m-stat-lbl">Response</div></div>
      <div class="m-stat"><div class="m-stat-val" style="color:var(--green);">0</div><div class="m-stat-lbl">Incidents</div></div>
    </div>
    <span class="online-badge online">
      <span class="pulse"></span>
      Online
    </span>
  </div>
  <div style="font-size:11px;color:var(--text3);font-family:var(--font-mono);margin-bottom:4px;">Last 60 checks</div>
  <div class="uptime-bar"><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div></div>
  <div style="display:flex;justify-content:space-between;font-size:11px;color:var(--text3);font-family:var(--font-mono);">
    <span>60 days ago</span><span>Today</span>
  </div>
</div>
<div class="monitor-card">
  <div class="monitor-header">
    <div class="monitor-site">
      <div class="monitor-fav">📰</div>
      <div><div class="monitor-name">NewsBlog</div><div class="monitor-url">newsblog.co</div></div>
    </div>
    <div class="monitor-stats">
      <div class="m-stat"><div class="m-stat-val" style="color:var(--red);">88.1%</div><div class="m-stat-lbl">Uptime</div></div>
      <div class="m-stat"><div class="m-stat-val">—</div><div class="m-stat-lbl">Response</div></div>
      <div class="m-stat"><div class="m-stat-val" style="color:var(--red);">7</div><div class="m-stat-lbl">Incidents</div></div>
    </div>
    <span class="online-badge offline">
      <span class="dot" style="background:var(--red)"></span>
      Offline
    </span>
  </div>
  <div style="font-size:11px;color:var(--text3);font-family:var(--font-mono);margin-bottom:4px;">Last 60 checks</div>
  <div class="uptime-bar"><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg down" title="Offline"></div><div class="uptime-seg down" title="Offline"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg down" title="Offline"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg down" title="Offline"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg down" title="Offline"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg down" title="Offline"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg down" title="Offline"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg down" title="Offline"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg down" title="Offline"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg down" title="Offline"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg down" title="Offline"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div><div class="uptime-seg up" title="Online"></div></div>
  <div style="display:flex;justify-content:space-between;font-size:11px;color:var(--text3);font-family:var(--font-mono);">
    <span>60 days ago</span><span>Today</span>
  </div>
</div>
@endsection
