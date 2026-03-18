@extends('layouts.app')

@section('title', 'Billing')
@section('subtitle', '/ Plan & Invoices')

@section('content')
<!-- Current Plan Banner -->
<div style="background:var(--surface);border:1px solid rgba(0,212,255,.25);border-radius:var(--radius-lg);padding:22px 24px;display:flex;align-items:center;gap:20px;margin-bottom:24px;box-shadow:0 0 40px rgba(0,212,255,.04);">
  <div style="width:48px;height:48px;background:var(--cyan-dim);border-radius:12px;display:flex;align-items:center;justify-content:center;color:var(--cyan);flex-shrink:0;">
    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
  </div>
  <div style="flex:1;">
    <div style="font-family:var(--font-display);font-size:16px;font-weight:700;color:var(--text);margin-bottom:4px;">Agency Plan — Active</div>
    <div style="font-size:13px;color:var(--text3);">Next billing on <span style="color:var(--cyan);font-family:var(--font-mono);">April 13, 2026</span> · $199.00 USD</div>
  </div>
  <div style="display:flex;gap:10px;">
    <button class="btn btn-ghost">Cancel Plan</button>
    <button class="btn btn-ghost">Update Payment</button>
  </div>
</div>

<!-- Usage -->
<div style="display:grid;grid-template-columns:repeat(3,1fr);gap:16px;margin-bottom:24px;">
  <div style="background:var(--surface);border:1px solid var(--border);border-radius:var(--radius-lg);padding:20px;">
    <div style="font-size:11px;color:var(--text3);text-transform:uppercase;letter-spacing:.8px;font-family:var(--font-mono);margin-bottom:10px;">Scans Used</div>
    <div style="font-size:24px;font-weight:800;font-family:var(--font-display);color:var(--cyan);line-height:1;margin-bottom:4px;">148 / ∞</div>
    <div style="font-size:12px;color:var(--text3);">This billing period</div>
  </div><div style="background:var(--surface);border:1px solid var(--border);border-radius:var(--radius-lg);padding:20px;">
    <div style="font-size:11px;color:var(--text3);text-transform:uppercase;letter-spacing:.8px;font-family:var(--font-mono);margin-bottom:10px;">Sites Monitored</div>
    <div style="font-size:24px;font-weight:800;font-family:var(--font-display);color:var(--cyan);line-height:1;margin-bottom:4px;">12 / ∞</div>
    <div style="font-size:12px;color:var(--text3);">Currently active</div>
  </div><div style="background:var(--surface);border:1px solid var(--border);border-radius:var(--radius-lg);padding:20px;">
    <div style="font-size:11px;color:var(--text3);text-transform:uppercase;letter-spacing:.8px;font-family:var(--font-mono);margin-bottom:10px;">API Requests</div>
    <div style="font-size:24px;font-weight:800;font-family:var(--font-display);color:var(--cyan);line-height:1;margin-bottom:4px;">1,329 / ∞</div>
    <div style="font-size:12px;color:var(--text3);">This billing period</div>
  </div>
</div>

<!-- Plans -->
<div class="panel">
  <div class="panel-header">
    <div class="panel-title"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>Plans</div>
  </div>
  <div style="padding:20px;display:grid;grid-template-columns:repeat(3,1fr);gap:16px;">
    <div class="plan-card ">
      
      <div class="plan-name">Starter</div>
      <div class="plan-price">$29<span>/mo</span></div>
      <div class="plan-feat">10 scans/month</div><div class="plan-feat">Up to 3 sites</div><div class="plan-feat">Email alerts</div><div class="plan-feat">Basic reports</div>
      <button class="btn btn-ghost" style="width:100%;margin-top:16px;justify-content:center;">Switch to Starter</button>
    </div><div class="plan-card ">
      
      <div class="plan-name">Pro</div>
      <div class="plan-price">$79<span>/mo</span></div>
      <div class="plan-feat">50 scans/month</div><div class="plan-feat">Up to 25 sites</div><div class="plan-feat">API access</div><div class="plan-feat">Slack alerts</div><div class="plan-feat">Scan history</div>
      <button class="btn btn-ghost" style="width:100%;margin-top:16px;justify-content:center;">Switch to Pro</button>
    </div><div class="plan-card current">
      <div class="current-badge">CURRENT</div>
      <div class="plan-name">Agency</div>
      <div class="plan-price">$199<span>/mo</span></div>
      <div class="plan-feat">Unlimited scans</div><div class="plan-feat">Unlimited sites</div><div class="plan-feat">White-label reports</div><div class="plan-feat">Team access</div><div class="plan-feat">Priority support</div>
      
    </div>
  </div>
</div>

<!-- Invoices -->
<div class="panel">
  <div class="panel-header">
    <div class="panel-title"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>Invoice History</div>
    <button class="btn btn-ghost btn-sm">Download All</button>
  </div>
  
  <div class="invoice-row">
    <span style="font-family:var(--font-mono);font-size:12px;color:var(--text3);width:120px;flex-shrink:0;">Mar 13, 2026</span>
    <span style="flex:1;font-size:13px;color:var(--text2);">Agency Plan</span>
    <span style="font-family:var(--font-mono);font-size:14px;font-weight:700;color:var(--text);">$199.00</span>
    <span class="tag tag-green">paid</span>
    <button class="mini-btn" style="margin-left:8px;">PDF</button>
  </div>
  <div class="invoice-row">
    <span style="font-family:var(--font-mono);font-size:12px;color:var(--text3);width:120px;flex-shrink:0;">Feb 13, 2026</span>
    <span style="flex:1;font-size:13px;color:var(--text2);">Agency Plan</span>
    <span style="font-family:var(--font-mono);font-size:14px;font-weight:700;color:var(--text);">$199.00</span>
    <span class="tag tag-green">paid</span>
    <button class="mini-btn" style="margin-left:8px;">PDF</button>
  </div>
  <div class="invoice-row">
    <span style="font-family:var(--font-mono);font-size:12px;color:var(--text3);width:120px;flex-shrink:0;">Jan 13, 2026</span>
    <span style="flex:1;font-size:13px;color:var(--text2);">Agency Plan</span>
    <span style="font-family:var(--font-mono);font-size:14px;font-weight:700;color:var(--text);">$199.00</span>
    <span class="tag tag-green">paid</span>
    <button class="mini-btn" style="margin-left:8px;">PDF</button>
  </div>
  <div class="invoice-row">
    <span style="font-family:var(--font-mono);font-size:12px;color:var(--text3);width:120px;flex-shrink:0;">Dec 13, 2025</span>
    <span style="flex:1;font-size:13px;color:var(--text2);">Pro Plan</span>
    <span style="font-family:var(--font-mono);font-size:14px;font-weight:700;color:var(--text);">$79.00</span>
    <span class="tag tag-green">paid</span>
    <button class="mini-btn" style="margin-left:8px;">PDF</button>
  </div>
  <div class="invoice-row">
    <span style="font-family:var(--font-mono);font-size:12px;color:var(--text3);width:120px;flex-shrink:0;">Nov 13, 2025</span>
    <span style="flex:1;font-size:13px;color:var(--text2);">Pro Plan</span>
    <span style="font-family:var(--font-mono);font-size:14px;font-weight:700;color:var(--text);">$79.00</span>
    <span class="tag tag-green">paid</span>
    <button class="mini-btn" style="margin-left:8px;">PDF</button>
  </div>
</div>
@endsection
